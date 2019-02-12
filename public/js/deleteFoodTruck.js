

function getFoodTrucks() {
    const apiUrl = "http://localhost/pai";
    const $list = $('.food-list');

    $.ajax({
        url : apiUrl + '/?page=foodtruck',
        dataType : 'json',
        type: 'post'

    })
        .done((res) => {

            $list.empty();
            res.forEach(el => {
                $list.append(`<tr>
                    <td><img style="border-radius: 10px" src="/pai/public/upload/${el.image}" height="100" width="150" /></td>
                    <td>${el.name}</td>
                    <td>${el.cook_type}</td>
                    <td>${el.description}</td>
                   

                    </tr>`);

            })

        });
}
function searcher() {
    const apiUrl = "http://localhost/pai";
    const $list = $('.food-list');

    $.ajax({
        url : apiUrl + '/?page=searcher',
        dataType : 'json',
        type: 'post'

    })
        .done((res) => {

            $list.empty();
            res.forEach(el => {
                $list.append(`<tr>
                    <td><img style="border-radius: 10px" src="/pai/public/upload/${el.image}" height="100" width="150" /></td>
                    <td>${el.name}</td>
                    <td>${el.cook_type}</td>
                    <td>${el.description}</td>
                  
                    </tr>`);

            })

        });
}
