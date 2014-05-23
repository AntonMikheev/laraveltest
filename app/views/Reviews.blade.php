<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$name = Session::get('name');
?>
<div class="container">
    @if(isset($name))
    <div class="row">
        <article class="col-md-5">
            <h1>Hello, {{$name}}</h1>
        </article>
    </div>
    @else
    <div class="row">
        <article class="col-md-5">
            <h1>Hello, guest</h1>
        </article>
    </div>
    @endif
    @foreach ($data as $item)
    <div class="row">
        <h3><a href="{{ URL::route('home') }}">Home</a></h3><br>
        <h3><a href="{{ URL::route('api.curl.reviews.form.add') }}">Add Reviews</a></h3><br>
        <h3><a href="{{ URL::route('api.curl.reviews.formfindbytag') }}">Find by tag</a></h3><br>
        <h3><a href="{{ URL::route('api.curl.reviews.formfindbytext') }}">Find by text</a></h3><br>
        <article class="col-md-5">
            <table border="3px" width="800px" bgcolor="#E6E6FA" align="center">
                <div class="btn-group">
                    <a href="editreviews/{{$item['id']}}" class="btn btn-primary">Edite</a>
                    <a href="reviewsdel/{{$item['id']}}" class="btn btn-primary">Delete</a>
                    <a href="singlereview/{{$item['id']}}" class="btn btn-primary">Learn more</a>
                </div>
                <tr><td>Reviews ID</td><td>{{$item['id']}}</td></tr>
                <tr><td>Reviews heading ID</td><td>{{$item['heading_id']}}</td></tr>
                <tr><td>Reviews name</td><td>{{$item['name']}}</td></tr>
                <tr><td>Reviews text</td><td>{{$item['text']}}</td></tr>
                <tr><td>Reviews author</td><td>{{$item['author']}}</td></tr>
            </table>
        </article>
    </div>
    @endforeach
</div>
</body>

</html>