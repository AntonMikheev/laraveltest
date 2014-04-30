<?php

class ReviewsControllerTest extends TestCase {

    public function testapiReviews() {

        $my = new ReviewsController();
        $response = $this->call('GET', 'api.laraveltest/reviews/56');
        $this->assertEquals('{"id":"56","heading_id":"2","name":"name6654","text":"tgerger","author":"ggt"}', $response->getContent());
        $this->assertResponseStatus(200);
    }

    public function testapiEditReviews() {

        $my = new ReviewsController();
        $data = '{"id":"52", "text":"123123123123123"}';
        $response = $this->call('POST', 'api.laraveltest/editreviews', [], [], ['Accept: application/json', 'Content-Type: application/json'], $data);
        $this->assertEquals('{"success":true,"message":"Edited"}', $response->getContent());
        $this->assertResponseStatus(200);
    }

    public function testfindByText() {

        $my = new ReviewsController();
        $data = '{"data":"name6654"}';
        $response = $this->call('POST', 'api.laraveltest/findbytext', [], [], ['Accept: application/json', 'Content-Type: application/json'], $data);
        $this->assertEquals('[{"id":"53","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"54","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"55","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"56","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"58","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}}]', $response->getContent());
        $this->assertResponseStatus(200);
    }

    public function testfindByTag() {

        $my = new ReviewsController();
        $data = '{"data":"name6654"}';
        $response = $this->call('POST', 'api.laraveltest/findbytext', [], [], ['Accept: application/json', 'Content-Type: application/json'], $data);
        $this->assertEquals('[{"id":"53","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"54","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"55","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"56","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"57","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}},{"id":"58","name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","news":{},"tags":{}}]', $response->getContent());
        $this->assertResponseStatus(200);
    }

    public function testapiDelReviews() {

        $my = new ReviewsController();
        $response = $this->call('DELETE', 'api.laraveltest/reviewsdel/56');
        $this->assertEquals('{"success":true,"message":"Delete"}', $response->getContent());
    }

    public function testapiAddReviews() {

        $my = new ReviewsController();
        $data = '{"name":"name6654","heading_id":"2","text":"tgerger","author":"ggt","tags":"2","news":"100"}';
        $response = $this->call('POST', 'api.laraveltest/addreviews', [], [], ['Accept: application/json', 'Content-Type: application/json'], $data);
        $this->assertEquals('{"success":true,"message":"Added"}', $response->getContent());
        $this->assertResponseStatus(200);
    }

}
