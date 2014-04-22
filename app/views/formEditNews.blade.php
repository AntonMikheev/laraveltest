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
        $tags_old = array();
        foreach ($tags2 as $item){
            $tags_old[] = $item->id;
            $tags_old[] = $item->name;
        }
        $reviews_old = array();
        foreach ($revs2 as $item){
            $reviews_old[] = $item->id;
            $reviews_old[] = $item->name;
        }
        print_r($tags_old);
        ?>
        <h3><a href="{{ URL::to('/') }}">Home</a></h3><br>
        <h3><a href="{{ URL::to('news') }}">Back to News</a></h3><br>
        {{ Form::open(array('url' => 'edit-news/'.$id, 'method' => 'post')) }}
        Old Name = {{$name}}: {{Form::text('name', $name);}}</br>
        Old Text = {{$text}}: {{Form::text('text', $text);}}</br>
        Old Author = {{$author}}: {{Form::text('author', $author);}}</br>
        Edit Heading: {{Form::select('heading', $heading_mass_select,array($heading_id, $heading_id));}}</br>
        Tags: {{Form::select('tags[]', $tags_mass_select, $tags_old, array('multiple'));}}</br>
        Reviews: {{Form::select('reviews[]', $reviews_mass_select, $reviews_old, array('multiple'));}}</br>
        {{Form::submit('Save');}}
        {{ Form::close() }}

    </body>
</div>
</html>