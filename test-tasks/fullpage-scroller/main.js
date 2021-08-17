$(document).ready(function() {

    // let firstGroupSlideIndex  = 1;
    // let secondGroupSlideIndex  = 1;

    // let firstSlideGroupLength = 2;
    // let secondSlideGroupLength = 2;
    let sliding = false;


    // $(function() {

        function createVariables(elems) {
            let slideGroupCurrentElemIndexNames = [];
            let slideGroupLengthVariableNames = [];

            for (let i = 0; i < elems.length; ++i) {
                slideGroupCurrentElemIndexNames[i] = `slideGroupNumber_${ +i + 1}_currentElemIndex`;
                slideGroupLengthVariableNames[i] = `slideGroupNumber_${ +i + 1}_length`;
            };
            // console.log(elems);
            // console.log(slideGroupLengthVariableNames);
            return [slideGroupCurrentElemIndexNames, slideGroupLengthVariableNames];
        }

        // let variablesArray = createVariables( $('.slide-group') );
        // console.log(createVariables( $('.slide-group') ));

        // const [slideGroupCurrentElemIndexNamesArray, slideGroupLengthVariableNamesArray] = variablesArray;
        const [slideGroupCurrentElemIndexNamesArray, slideGroupLengthVariableNamesArray] = createVariables( $('.slide-group') );

        console.log(slideGroupCurrentElemIndexNamesArray, slideGroupLengthVariableNamesArray);




        $('.slide-group').each(function() {

            // console.log( slideGroupLengthVariableNames );
            // let slideGroupNumber_${$(this).index()}_CurrentElemIndex = 1;
            // console.log( `slide group number ${ +$(this).index() + 1} contains ${$(this).children().length} elements` );
        });


    // });

    for (let i = 0; i < slideGroupCurrentElemIndexNamesArray.length; ++i) {
        // slideGroupCurrentElemIndexNamesArray[i] = 1;
        console.log(`${slideGroupCurrentElemIndexNamesArray[i]}`);
    };

    $('#fullpage').fullpage({
        sectionSelector: '.vertical-scrolling',
        slideSelector: '.horizontal-scrolling',
        scrollingSpeed: 1000,
        css3: true,
        controlArrows: false,

        onLeave: function(index, nextIndex, direction) {



            if( !sliding && direction == 'down' ) {
                    $('.slide-group').each(function(i) {

                        let slideGroupIndex = +$(this).index() + 1;
                        let slideGroupLength = $(this).children().length;



                        if(index == slideGroupIndex && slideGroupCurrentElemIndexNamesArray[i] < slideGroupLength) {

                            sliding = true;
                            $.fn.fullpage.moveSlideRight();
                            slideGroupCurrentElemIndexNamesArray[i]++;

                            return false;
                        }
        }
                    else if( !sliding && direction == 'up' ) {
                        if (index == slideGroupIndex && slideGroupCurrentElemIndexNamesArray[i] > 1) {
                            console.log(slideGroupIndex);

                            sliding = true;
                            $.fn.fullpage.moveSlideLeft();
                            slideGroupCurrentElemIndexNamesArray--;

                            return false;
                        }
                    }

                    else if(sliding) {
                        return false;
                    }
                }

            });

        },

        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {

            sliding = false;
            console.log(slideIndex);

        }

    });

});