(function () {
    'use strict';

    ACMESTORE.module = {

        loadMore: function (endpoint, $postData, callback){
            var postdata = $.param($postData);
            axios.post(endpoint, postdata).then(function (response) {
                callback(response.data);
            });
        }
    }

})();