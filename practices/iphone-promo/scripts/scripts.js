'use strict';

document.addEventListener('DOMContentLoaded', () => {

    const getData = (url, callback) => {
        // const request = new XMLHttpRequest();
        // request.open('GET', url);
        // request.send();

        // request.addEventListener('readystatechange', () => {
        //     if ( request.readyState !== 4 ) return;

        //     if ( request.status === 200 ) {
        //         const response = JSON.parse(request.response);
        //         callback(response);
        //     } else {
        //         console.error( new Error( 'Ошибка: ' + request.status) );
        //     }
        // });
        fetch(url)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error (response.statusText);
            })
            .then(callback)
            .catch( err => {
                console.log(err);
            });
    };

    // getData('https://jsonplaceholder.typicode.com/posts', (data) => {
    // getData('cross-sell-dbase/dbase.json', (data) => {
    //     console.log(data);
    // });

    const tabs = () => {
        const cardDetailChangeElems = document.querySelectorAll('.card-detail__change');
        // const cardDetailTitleElems = document.querySelectorAll('.card-details__title');
        const cardDetailTitleElem = document.querySelector('.card-details__title');
        // const cardImageElems = document.querySelectorAll('.card__image');

        const cardImageItemElem = document.querySelector('.card__image_item');
        const cardDetailsPriceElem = document.querySelector('.card-details__price');

        const descriptionMemoryElem = document.querySelector('.description__memory');

        // const hideAll = () => {
        //     for (let i = 0; i < cardDetailChangeElems.length; i++ ) {
        //         cardDetailChangeElems[i].classList.remove('active');
        //         cardDetailTitleElems[i].classList.remove('active');
        //         cardImageElems[i].classList.remove('active');
        //     }
        // };

        // for (let i = 0; i < cardDetailChangeElems.length; i++ ) {
        //     cardDetailChangeElems[i].addEventListener('click', () => {
        //         hideAll();

        //         cardDetailChangeElems[i].classList.add('active');
        //         cardDetailTitleElems[i].classList.add('active');
        //         cardImageElems[i].classList.add('active');
        //     })
        // }

        // [...cardDetailChangeElems].map(elem => {

        // });

        const data = [
            {
                name: 'Смартфон Apple iPhone 12 Pro 128GB Graphite',
                img: 'img/iPhone-graphite.png',
                price: 85990,
                memory: 128
            },
            {
                name: 'Смартфон Apple iPhone 12 Pro 256GB Silver',
                img: 'img/iPhone-silver.png',
                price: 99990,
                memory: 256
            },
            {
                name: 'Смартфон Apple iPhone 12 Pro 512GB Pacific Blue',
                img: 'img/iPhone-blue.png',
                price: 119990,
                memory: 512
            }
        ];

        const deactivateButton = () => {
            cardDetailChangeElems.forEach( btn => {
                btn.classList.remove('active');
            });
        };

        cardDetailChangeElems.forEach( ( btn, i ) => {
            btn.addEventListener('click', () => {

                if ( !btn.classList.contains('active') ) {
                    deactivateButton();
                    btn.classList.add('active');

                    cardDetailTitleElem.textContent = data[i].name;
                    cardImageItemElem.src = data[i].img;
                    cardImageItemElem.alt = data[i].name;
                    cardDetailsPriceElem.textContent = data[i].price + '₽';
                    descriptionMemoryElem.textContent = `Встроенная память (ROM) ${data[i].memory} ГБ`;
                }
            });
        });
    };

    const accordion = () => {
        // const charasteristicsTitle = document.querySelectorAll('.characteristics__title');
        // const charasteristicsDescription = document.querySelectorAll('.characteristics__description');

        // [...charasteristicsTitle].map( (elem, i) => { // or
        // charasteristicsTitle.forEach( (elem, i) => {
        //     elem.addEventListener('click', () => {
        //         elem.classList.toggle('active');
        //         charasteristicsDescription[i].classList.toggle('active');
        //     });
        // });

        const charasteristicsListElem = document.querySelector('.characteristics__list');
        const charasteristicsItemElems = document.querySelectorAll('.characteristics__item');

        charasteristicsItemElems.forEach( elem => {
            if ( elem.children[1].classList.contains('active') ) {
                elem.children[1].style.height = `${ elem.children[1].scrollHeight }px`;
            }
        });

        const open = (button, dropDown) => {
            closeAllDrops(button, dropDown);

            dropDown.style.height = `${ dropDown.scrollHeight }px`;
            button.classList.add('active');
            dropDown.classList.add('active');
        };

        const close = (button, dropDown) => {
            button.classList.remove('active');
            dropDown.classList.remove('active');
            dropDown.style.height = '';
        };

        const closeAllDrops = (button, dropDown) => {
            charasteristicsItemElems.forEach( (elem) => {
                if ( elem.children[0] !== button && elem.children[1] !== dropDown ) {
                    close( elem.children[0], elem.children[1] );
                }
            });
        };

        charasteristicsListElem.addEventListener('click', (event) => {
            const target = event.target;

            if ( target.classList.contains('characteristics__title') ) {

                const parent = target.closest('.characteristics__item');
                const description = parent.querySelector('.characteristics__description');

                description.classList.contains('active') ? close(target, description) : open(target, description);
            }
        });

        // document.body.addEventListener('click', (event) => {
        //     const target = event.target;

        //     if ( !target.closest('.characteristics__list') ) {
        //         closeAllDrops();
        //     }
        // });

    };

    const modal = () => {
        const cardDetailsButtonBuy = document.querySelector('.card-details__button_buy');
        const cardDetailsButtonDelivery = document.querySelector('.card-details__button_delivery');
        const cardDetailsTitle = document.querySelector('.card-details__title');

        const modal = document.querySelector('.modal');
        const modalTitle = modal.querySelector('.modal__title');
        const modalSubtitle = modal.querySelector('.modal__subtitle');
        const modalSelectedProduct = modal.querySelector('.modal__selected-product');

        const openModal = event => {
            const target = event.target;

            modal.classList.add('open');
            document.addEventListener( 'keydown', escapeHandler );
            modalTitle.textContent = cardDetailsTitle.textContent;
            modalSelectedProduct.value = cardDetailsTitle.textContent;
            modalSubtitle.textContent = target.dataset.buttonBuy;

            // console.log(modalSelectedProduct.value);
        };

        const closeModal = () => {
            modal.classList.remove('open');
            document.removeEventListener( 'keydown', escapeHandler );
        };

        const escapeHandler = event => {
            if ( event.code === "Ecsape" || event.keyCode === 27 ) {
                closeModal();
            }
        };

        cardDetailsButtonBuy.addEventListener( 'click', openModal );
        cardDetailsButtonDelivery.addEventListener( 'click', openModal );

        modal.addEventListener('click', event => {
            const target = event.target;

            if ( target.classList.contains('modal__close') || target === modal ) {
                closeModal();
            }
        });

    };

    // const renderCrossSell = () => {
    //     const crossSellList = document.querySelector('.cross-sell__list');
    //     const crossSellAdd = document.querySelector('.cross-sell__add');
    //     const allProducts = [];

    //     const shuffle = arr => arr.sort( () => Math.random() - 0.5 );

    //     const createCrossSellItem = (product) => {

    //         const { photo, name, price } = product;

    //         const liItem = document.createElement('li');

    //         liItem.innerHTML = `
    //             <article class="cross-sell__item">
    //                 <img class="cross-sell__image" src="${photo}" alt="${name}" title="${name}" loading="lazy">
    //                 <h3 class="cross-sell__title">${name}</h3>
    //                 <p class="cross-sell__price">${price}₽</p>
    //                 <button type="button" class="button button_buy cross-sell__button">Купить</button>
    //             </article>
    //         `;

    //         return liItem;
    //     };

    //     // const createCrossSellList = (products) => {
    //     //     const shuffleProducts = shuffle(products);
    //     //     const fourItems = shuffleProducts.slice(0, 4);

    //     //     // console.log(products);
    //     //     // products.forEach( item => {
    //     //     // shuffleProducts.forEach( item => {
    //     //     fourItems.forEach( item => {
    //     //         // console.log(item);
    //     //         crossSellList.append( createCrossSellItem(item) );
    //     //     });
    //     // };
    //     // const createCrossSellList = (products = []) => {
    //     //     allProducts.push(...products);
    //     //     // const shuffleProducts = shuffle(products);
    //     //     crossSellList.textContent = '';
    //     //     const shuffleProducts = shuffle(allProducts);
    //     //     const fourItems = shuffleProducts.slice(0, 4);

    //     //     // console.log(products);
    //     //     // products.forEach( item => {
    //     //     // shuffleProducts.forEach( item => {
    //     //     fourItems.forEach( item => {
    //     //         // console.log(item);
    //     //         crossSellList.append( createCrossSellItem(item) );
    //     //     });
    //     //     setTimeout(createCrossSellList, 5000);
    //     // };

    //     const render = arr => {
    //         arr.forEach( item => {
    //             crossSellList.append( createCrossSellItem(item) );
    //         });
    //     };

    //     // const wrapper = (fn, count) => {
    //     //     let counter = 0;
    //     //     return (...args) => {
    //     //         if ( counter === count ) return;
    //     //         counter++;
    //     //         return fn(...args);
    //     //     }
    //     // };

    //     // const wrapRender = wrapper(render, 2);

    //     const createCrossSellList = (products = []) => {
    //         allProducts.push( ...shuffle(products) );
    //         const fourItems = allProducts.splice(0, 4);
    //         render(fourItems);
    //         // wrapRender(fourItems);
    //     };

    //     crossSellAdd.addEventListener('click', () => {
    //         render(allProducts);
    //         // wrapRender(allProducts);
    //         crossSellAdd.remove();
    //     });

    //     getData( 'cross-sell-dbase/dbase.json', createCrossSellList );

    // };

    const renderCrossSell = () => {
        const countRowProducts = 4;
        const crossSellList = document.querySelector('.cross-sell__list');
        const crossSellAdd = document.querySelector('.cross-sell__add');
        const allProducts = [];
        let wrapRender = null;

        const shuffle = arr => arr.sort( () => Math.random() - 0.5 );

        const createCrossSellItem = (product) => {
            const { photo, name, price } = product;
            const liItem = document.createElement('li');

            liItem.innerHTML = `
                <article class="cross-sell__item">
                    <img class="cross-sell__image" src="${photo}" alt="${name}" title="${name}" loading="lazy">
                    <h3 class="cross-sell__title">${name}</h3>
                    <p class="cross-sell__price">${price}₽</p>
                    <button type="button" class="button button_buy cross-sell__button">Купить</button>
                </article>
            `;

            return liItem;
        };

        const render = arr => {
            arr.forEach( item => {
                crossSellList.append( createCrossSellItem(item) );
            });
        };

        const wrapper = (fn, count) => {
            let counter = 0;
            return (...args) => {
                if ( counter === count ) return;
                counter++;
                return fn(...args);
            }
        };

        const createCrossSellList = (products = []) => {
            wrapRender = wrapper(render, parseInt(products.length / countRowProducts) + 1);
            allProducts.push( ...shuffle(products) );
            const fourItems = allProducts.splice(0, 4);
            render(fourItems);
        };

        crossSellAdd.addEventListener('click', () => {
            wrapRender(allProducts.splice(0, countRowProducts));
        });

        getData( 'cross-sell-dbase/dbase.json', createCrossSellList );

    };

    tabs();
    accordion();
    modal();
    renderCrossSell();
    amenu('.header__menu', '.header-menu__list', '.header-menu__item', '.header-menu__burger');
});