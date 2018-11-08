// Modules

class GrowCard{
    constructor(){
        this.wrapper = document.querySelectorAll('.portfolio__imgWrapper');
        this.card = document.querySelectorAll('.portfolio__card');
        this.img = document.querySelectorAll('.portfolio__img');
        this.events();
    }

    events(){
        this.img.addEventListener('click', this.createOverlay );

        this.card.addEventListner('click', this.createOverlay);

        this.card.addEventListener('click', this.createOverlay);
    }


    createOverlay(){
        
    }
}





let growCard = new GrowCard();