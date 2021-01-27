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

## PROTECTED $HIDEEN - $APPENDS

<pre>protected $hidden = [...]</pre>
    Los atributos que se defiden dentro, no retornan en las consultas
    que se realiza.

    Entidad User : protected $hidden = ['password', 'remember_token']
    Entidad Post : protected $hidden = ['title', 'body']

<pre>protected $hidden = [...]</pre>
    Los atributos que se definen dentro, aparecen el las consultas previo
    método ACCESSOR (get{ATTRIBUTE}Attribute) definido 

    Entidad Post : protected $appends = ['post_uppername','post_excerpt']
     
                    public function getPostUppernameAttribute () {
                        return strtolower($this->title);
                    }
                    public function getPostExcerptAttribute () {
                        return substr($this->body,0,10).'...';
                    }

<pre>
    {
    "id": 1,
    "created_at": "2021-01-26T17:52:35.000000Z",
    "updated_at": "2021-01-26T17:52:35.000000Z",
    "post_uppername": "omnis animi deleniti ipsa cumque quidem ut.",
    "post_excerpt": "Eligendi q..."
    }
</pre>

        
