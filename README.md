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

<pre>protected $appends = [...]</pre>
    Los atributos que se definen dentro, aparecen el las consultas previo
    método ACCESSOR (get{ATTRIBUTE}Attribute) definido 

    Entidad Post : protected $appends = ['post_uppername','post_excerpt']
     
                    public function getPostUppernameAttribute ()
                    {
                        return strtolower($this->title);
                    }
                    public function getPostExcerptAttribute () 
                    {
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

## RESOURCE : Formato de datos

    Extiende JsonResource

<pre>
    php artisan make:resource PostResource
</pre>

<pre>
    return [
        'número'                => $this->id,
        'título'                => $this->title,
        'contenido'             => $this->body,
        'creado_hace'           => $this->created_at->diffForHumans(), 
        'fecha_creación'        => $this->created_at->format('d-m-Y'),
        'fecha_actualización'   => $this->updated_at->format('d-m-Y'),
    ];
</pre>
<pre>
{
    "data": 
    {
        "número": 1,
        "título": "Omnis animi deleniti ipsa cumque quidem ut.",
        "contenido": "Eligendi quaerat tempora voluptatem in occaecati..",
        "creado_hace": "9 hours ago",
        "fecha_creación": "26-01-2021",
        "fecha_actualización": "26-01-2021"
    }
}
</pre>

## RESOURCE-COLLECTIONS : formatado de datos para varios registros

    Hereda el formato de datos del PostResource
    Extiende ResourceCollection
<pre>
    php artisan make:resource PostCollection
</pre>

## ERRORES HTTP

    1XX :   Informativos
    2XX :   Respuesta exitosa
    3XX :   Redirección
    4XX :   Erroes del cliemte
    5xx :   Errores del servidor