
(function () {
    'use strict';

    $(document).foundation();

    $(document).ready(function () {

        //SWITCH PAGES
        switch ($("body").data("page-id")){
            case 'home':
                ACMESTORE.home.homePageArticle();
                ACMESTORE.home.homeBreakingNews();
                ACMESTORE.home.homeJustIn();
                ACMESTORE.home.homeLatest();
                ACMESTORE.home.homepolitics();
                ACMESTORE.home.homebusiness();
                ACMESTORE.home.homesport();
                ACMESTORE.home.homeentertainment();
                ACMESTORE.home.homecolumns();
                ACMESTORE.home.homeeducation();
                ACMESTORE.home.homehealth();
                ACMESTORE.home.homerelationship();
                ACMESTORE.home.hometechnology();
                ACMESTORE.home.homemetro();
                ACMESTORE.home.homeothers();
                break;

            case 'article':
                ACMESTORE.article.details();
                break; 
                case 'lib':
                    ACMESTORE.module.loadMore();
                    break; 
            case 'articles':
            case 'categories':
                    ACMESTORE.articles.display();
                break; 
            case 'adminArticle':
                ACMESTORE.admin.delete();
                break;
            case 'adminCategories':
                ACMESTORE.admin.update();
                ACMESTORE.admin.delete();
                break;
            default:
                //do nothing
        }
    })

})();