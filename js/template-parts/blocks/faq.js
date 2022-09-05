import $  from 'jquery';

function faqInit(){
    $('.qa').each(function(){
        let block = $(this);
        $(this).find('.qa__item').each(function(){
            let item = $(this);
            let btn = $(this).find('.qa__item__header');
            let content = $(this).find('.qa__item__content');
            btn.click(function(){
                let btn = block.find('.qa__item.active .qa__item__btn');
                if(item.hasClass('active')){
                    content.slideToggle();
                    item.removeClass('active');
                } else{
                    block.find('.qa__item.active .qa__item__content').slideUp();
                    block.find('.qa__item.active').removeClass('active');
                    content.slideToggle();
                    item.toggleClass('active');
                }
            });
        })
    });
}

export { faqInit };