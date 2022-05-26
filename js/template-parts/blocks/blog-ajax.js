import $  from 'jquery';

function blogAjax(){
    $('.js-blog').each(function(){
         
        var block = $(this);
        var elementsNotAjax = block.find('.js-ajax-hide');
        var container = block.find('.js-blog-container');

        var filterOption = block.find('.js-filter-val');
        var clearAll = $('.updates-filter .js-updates-filter-clear-all');
        var loadMore = block.find('.js-loadmore');

        if(container.find('li').length < 6){
            loadMore.hide();
        }
        //functionalities js

        //handle selected taxonomies
        function getTaxonomies() {
            let taxonomiesObject = {};
            block.find('.js-filter').each(function () {
                let taxonomy = $(this).data('taxonomy');

                let categoryList = $(this).find('.options');
                categoryList.find('.option__label').removeClass('active');
                let cats = '';
                categoryList.find('input[type="checkbox"]:checked,input[type="radio"]:checked').each(function (index) {
                    $(this).parent().addClass('active');
                    var value = $(this).val();
                    if(index!=0 && value != -1){
                        cats += ',';
                    }
                    if(value != -1){
                        cats += value;
                    }
                });

                if (cats != '') {
                    taxonomiesObject[taxonomy] = '';
                    taxonomiesObject[taxonomy] = cats;
                }

            });

            return taxonomiesObject; //returns array of selected taxonomies
        }

        //ajax requst based on taxonomies
        function getPosts(taxonomies) {
            var data = {};
            
            data.taxonomies = taxonomies;
            data.ppp = container.data('ppp');
            data.page = container.data('page');

            // push categories to url
            var url = new URL(window.location.href);
            url.searchParams.delete('category');
            url.searchParams.delete('page');

            for (const [key, value] of Object.entries(taxonomies)) {
                //url.searchParams.set(key, value);
            }

            window.history.replaceState(null, null, url);
            
            elementsNotAjax.hide();
            container.addClass('loading');


            $.ajax({
                /* eslint-disable */
                url: customjs_ajax_object.ajax_url,
                /* eslint-enable */
                type: 'post',
                data: {
                    action: 'blog_ajax',
                    tax: data.taxonomies,
                    ppp: data.ppp,
                    page: data.page,
                },
                success: function (response) {
                    if (response !== '') {

                        container.html('');
                        container.html(response);
                        $([document.documentElement, document.body]).animate({
                            scrollTop: container.offset().top-120
                        }, 1000);   
                        
                        if($(response).find('li').length<6){
                            loadMore.hide();
                        } else{
                            loadMore.show();
                        }
                        
                    } else {
                        container.html('Nothing was found.');
                    }
                }
            });
        }

        //ajax requst based on taxonomies
        function loadPosts(taxonomies) {
            var data = {};
            
            data.taxonomies = taxonomies;
            data.ppp = container.data('ppp');
            data.page = container.data('page');

            // push categories to url
            var url = new URL(window.location.href);
            url.searchParams.delete('category');

            for (const [key, value] of Object.entries(taxonomies)) {
                //url.searchParams.set(key, value);
            }

            window.history.replaceState(null, null, url);
            
            $.ajax({
                /* eslint-disable */
                url: customjs_ajax_object.ajax_url,
                /* eslint-enable */
                type: 'post',
                data: {
                    action: 'blog_ajax_loadmore',
                    tax: data.taxonomies,
                    ppp: data.ppp,
                    page: data.page,
                },
                success: function (response) {
                    if (response !== '') {

                        container.find('.blogPosts__list').append(response);
                                          
                        if($(response).find('li').length<6){
                            loadMore.hide();
                        } else{
                            loadMore.show();
                        }

                    } else {
                        container.html('Nothing was found.');
                    }
                }
            });
        }

        filterOption.change(function(event){
            container.data('page', 1);
            let taxonomies = getTaxonomies();
            getPosts(taxonomies);
        });

        
        clearAll.on('click', function(e){
            e.preventDefault();
            container.data('page',1);

            $('.js-updates-filter').find('input[type="checkbox"]:checked,input[type="radio"]:checked').each(function () {
                $(this).prop('checked', false);
            });
            searchText.val('');

            let taxonomies = getTaxonomies();

            clearAll.removeClass('active');
            updateLabelButtons();
            getPosts(taxonomies);
        });

        loadMore.click(function(e){
            e.preventDefault();
            var page = parseInt(container.data('page'));
            page += 1;
            console.log(page);
            container.data('page',page);

            let taxonomies = getTaxonomies();

            loadPosts(taxonomies);
            
        });
            
    });
}

export { blogAjax };