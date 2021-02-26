<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }
    </style>
</head>
<style>
.hideData{
    height: 40px!important;
}
.bg-light-dark{
    background-color: rgb(243, 243, 243);
}
.prikazi:focus{
    outline: 0;
}
</style>

<body class="bg-light">

    <!-- <input type="text" class="query" placeholder="Title">
    <input type="submit" class="search" value="Search">
    <input type="number" value="1" class="pagePlus"> -->
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Query</label>
                        <input type="text" class="form-control query" id="query" aria-describedby="emailHelp"
                            placeholder="Enter query">
                    </div>
                    <button class="btn btn-primary search">Search</button>
                </form>

            </div>
        </div>
    </div>

        <!-- <div class="card" style="width: 18rem;">
        <img class="card-img-top coverImage" src="http://via.placeholder.com/700x180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title title">Card title</h5>
          <p class="card-text description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p class="card-text eps">Eps</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> -->
        <div class="container mt-4">
            <div class="row data" style="transition: 0.6s all; overflow: hidden;">
                
                <div class="col-6 bg-light-dark" style="">
                <button class="btn btn-success prikazi">+</button>
                    <form class="m-2" id="addForm">
                            
                            <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name_en" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name_jp" type="text" class="form-control" id="nameJP" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Episodes</label>
                            <input name="episodes" type="text" class="form-control" id="episodes" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input name="status" type="text" class="form-control" id="status" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Source</label>
                            <input name="source" type="text" class="form-control" id="source" aria-describedby="emailHelp"
                                placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image url</label>
                                <input name="cover" type="text" class="form-control" id="image" aria-describedby="emailHelp"
                                    placeholder="Enter email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image url</label>
                                <input name="banner" type="text" class="form-control" id="imageBanner" aria-describedby="emailHelp"
                                    placeholder="Enter email" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image url</label>
                                <input name="banner" type="text" class="form-control" id="description" aria-describedby="emailHelp"
                                    placeholder="Enter email" >
                        </div>
                        
                       



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>

$('#addForm').on('submit',function(event){
        event.preventDefault();

        let name = $('#name').val();
        let nameJP = $('#nameJP').val();
        let episodes = $('#episodes').val();
        let source = $('#source').val();
        let status = $('#status').val();
        let banner = $('#imageBanner').val();
        let cover = $('#image').val();
        let description = $('#description').val();

        $.ajax({
          url: "/add",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name_en:name,
            name_jp:nameJP,
            episodes:episodes,
            source:source,
            banner:banner,
            cover:cover,
            status:status,
            description:description,
          },
          success:function(response){
            Swal.fire({
                icon: 'success',
                title: 'Yey...',
                text: response.success,
        
                })
                $("#addForm").closest('form').find("input[type=text], textarea").val("");
                $("#query").val("");
          },
         });
        });


            // Here we define our query as a multi-line string
            // Storing it in a separate .graphql/.gql file is also possible

                $('.prikazi').click(function(){
                    $('.data').toggleClass('hideData');
                });




            $('.search').click(function (event ) {
                event.preventDefault();
                let searchVar = $('.query').val();
                console.log(searchVar);



                var query = `
                                query ($search: String) { # Define which variables will be used in the query (id)
                                Media (search: $search, type: ANIME) { # Insert our variables into the query arguments (id) (type: ANIME is hard-coded in the query)
                                id
                                type
                                episodes
                                status
                                description
                                bannerImage
                                source
                                coverImage{medium large extraLarge}
                                        title {
                                        romaji
                                        english
                                        native
                                        }
                                       
                                }
                            }
                                `;
                var variables = {
                    search: searchVar,
                };

                // Define the config we'll need for our Api request
                var url = 'https://graphql.anilist.co',
                    options = {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            query: query,
                            variables: variables
                        })
                    };

                // Make the HTTP Api request
                fetch(url, options).then(handleResponse)
                    .then(handleData)
                    .catch(handleError);

                function handleResponse(response) {
                    return response.json().then(function (json) {
                        return response.ok ? json : Promise.reject(json);
                    });

                }

                function handleData(data) {
                    console.log(data);
                   $("#id").val(data.data.Media.id); 
                   $("#name").val(data.data.Media.title.english); 
                   $("#nameJP").val(data.data.Media.title.romaji); 
                   $("#episodes").val(data.data.Media.episodes); 
                   $("#image").val(data.data.Media.coverImage.extraLarge); 
                   $("#imageBanner").val(data.data.Media.bannerImage); 
                   $("#status").val(data.data.Media.status); 
                   $("#source").val(data.data.Media.source); 
                   $("#description").val(data.data.Media.description); 
                    
                }

                function handleError(error) {
                    alert('Error, check console');
                    console.error(error);
                }
            })

            $('.open-banner').click(function(){
                let url = $("#image").val(); 
                window.open(url, '_blank');
            })
        </script>
</body>

</html>