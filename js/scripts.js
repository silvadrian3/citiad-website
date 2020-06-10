function search(){

    var category_id = 0,
        category_name = $("#searchByCategory").val().trim(),
        targetUrl = "products.php";

    switch (category_name) {
        case "Writing Instruments":
            category_id = 14;
            break;
        case "Stationaries":
            category_id = 20;
            break;
        case "Drinkwares":
            category_id = 17;
            break;
        case "Electronics":
            category_id = 18;
            break;
        case "UV Prints":
            category_id = 21;
            break;
    }

    if(category_id > 0){
        targetUrl += '?c=' + btoa(category_id);
    }

    window.location = targetUrl;
}