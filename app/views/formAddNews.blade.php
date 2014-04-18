<!DOCTYPE html>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <!--<script type="text/javascript" src="./public/js/new.js"></script>-->
    </head>
    <body>
        <?php
        $heading = Heading::all();
        $heading_mass_select = array();
        foreach ($heading as $item) {
            $heading_mass_select[$item->id] = $item->name;
        }
        $tags = Tags::all();
        $tags_mass_select = array();
        foreach ($tags as $item) {
            $tags_mass_select[$item->id] = $item->name;
        }
        $reviews = Reviews::all();
        $reviews_mass_select = array();
        foreach ($reviews as $item) {
            $reviews_mass_select[$item->id] = $item->name;
        }
        ?>

        {{ Form::open(array('url' => 'add-news', 'method' => 'post')) }}
        Name: {{Form::text('name');}}</br>
        Text: {{Form::text('text');}}</br>
        Author: {{Form::text('author');}}</br>
        Heading: {{Form::select('heading', $heading_mass_select);}}</br>
        Tags: {{Form::select('tags[]', $tags_mass_select, array('', ''), array('multiple'));}}</br>
        Reviews: {{Form::select('reviews[]', $reviews_mass_select, array('', ''), array('multiple'));}}</br>
        {{Form::submit('Add');}}
        {{ Form::close() }}

    </body>
</div>
</html>