(function (){
    'use strict';
    ACMESTORE.home.homerelationship = function () {
         var app = new Vue({
            el:'#lifestylenews',
            data: {
                relationship: [],
                loading: false
            },
    
            methods: {
                getrelationshipArticle: function () {
                    this.loading = true;
                    axios.get('/relationship').then(function (response){
                        console.log(response.data);
                        app.relationship = response.data.relationship;
                        app.loading = false;
                    });
                },
                stringLimit: function (string, value){
                    if(string.length > value){
                        return string.substring(0, value) + '...';
                    }else{
                        return string;
                    }
                }
            },
    
            created: function () {
                this.getrelationshipArticle();
            }
         });
     }
})();