<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$name = Session::get('name');
$permission = Session::get('permission');
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
    <h3><a href="{{ URL::route('home') }}" class="btn btn-primary">Home</a></h3>
    @if($permission == 'admin' or $permission == 'redactor')
    <h3><a href="{{ URL::route('api.curl.reviews.form.add') }}" class="btn btn-primary">Add Reviews</a></h3>
    @endif
    <h3><a href="{{ URL::route('api.curl.reviews.formfindbytag') }}" class="btn btn-primary">Find by tag</a></h3>
    <h3><a href="{{ URL::route('api.curl.reviews.formfindbytext') }}" class="btn btn-primary">Find by text</a></h3><br>
    @foreach ($data as $item)
    <div class="row">
        <article class="col-md-5">
            <table border="3px" width="800px" bgcolor="#E6E6FA" align="center">
                <div class="btn-group">
                    @if($permission == 'admin' or $permission == 'redactor')
                    <a href="editreviews/{{$item['id']}}" class="btn btn-primary">Edite</a>
                    @endif
                    @if($permission == 'admin')
                    <a href="reviewsdel/{{$item['id']}}" class="btn btn-primary">Delete</a>
                    @endif
                    @if($permission == 'admin' or $permission == 'redactor' or $permission == 'user')
                    <a href="singlereview/{{$item['id']}}" class="btn btn-primary">Learn more</a>
                    @endif
                </div>
                <tr><td>Reviews ID</td><td>{{$item['id']}}</td></tr>
                <tr><td>Reviews heading ID</td><td>{{$item['heading_id']}}</td></tr>
                <tr><td>Reviews name</td><td>{{$item['name']}}</td></tr>
                <tr><td>Reviews text</td><td>{{$item['text']}}</td></tr>
                <tr><td>Reviews author</td><td>{{$item['author']}}</td></tr>
            </table>
            </br>
        </article>
    </div>
    @endforeach
</div>
</body>

</html>