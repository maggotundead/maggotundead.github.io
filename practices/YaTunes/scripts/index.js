// console.log('hello world');

import { videoPlayerInit } from './videoPlayer.js';
// import videoPlayerInit from './videoPlayer.js';

import { radioPlayerInit } from './radioPlayer.js';
import { musicPlayerInit } from './musicPlayer.js';

const playerBtn = document.querySelectorAll('.player-btn');
const playerBlock = document.querySelectorAll('.player-block');
const temp = document.querySelector('.temp');

// console.log(playerBtn);
// console.log(playerBlock);

const deactivationPLayer = () => {
    temp.style.display = 'none';
    playerBtn.forEach( btn => btn.classList.remove('active') );
    playerBlock.forEach( block => block.classList.remove('active') );
};

playerBtn.forEach((btn, index) => {
    // console.log(btn);
    // console.log(index);
    btn.addEventListener('click', () => {
        deactivationPLayer();
        btn.classList.add('active');
        playerBlock[index].classList.add('active');
    });
});




radioPlayerInit();
videoPlayerInit();
musicPlayerInit();