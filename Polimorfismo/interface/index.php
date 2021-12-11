<?php

interface Search
{
    public function all();
}
class User implements Search
{
    public function all(){
        return "Obtebiendo los Users, XML";
    }
}
class Post implements Search
{
    public function all(){
        return "Obtebiendo los Posts, JSON";
    }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();
