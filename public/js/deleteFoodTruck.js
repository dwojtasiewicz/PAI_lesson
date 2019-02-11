

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
                    <td>${el.name}</td>
                    <td>${el.type}</td>
                    <td>${el.description}</td>
                    <td>${el.image}</td>
                    </tr>`);

            })

        });
}