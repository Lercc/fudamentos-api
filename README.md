## API

## ENLACE IMPLICITO

    funtion store(Post $post) {
        return $post
    }

    La función store recibe por párametro una variable llamada "$post"
    lo que hace internamete es ir a consultar esta variable mediante el
    modelo "Post" :

        {
            $post = Post::find($id;)
        }

        
