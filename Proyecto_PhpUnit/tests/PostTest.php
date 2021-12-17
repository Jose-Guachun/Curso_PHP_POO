<?php
/**
 * Se utiliza de manera profesional para realizar test de codigos.
 * 
 */
use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post=new Post(); //Se instancia el objeto de Post
        $comment=new Comment(); //Se crea una instancia de la clase Comment
        $post->addComment($comment);//Ese comentario se agrega al post

        //sistema de test de phpunit utilizamos a continuacion.
        $this->assertEquals(1, $post->countComments());//Valida si 1 es igual al numero de post creados

        //ME VALIDA si eso que se crea en comentarios es una es una instancia real de mi clase comentarios 
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]); 
    }
}
