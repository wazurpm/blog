<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Created</title>
    </head>
    <body>
        <h1>
            Post por aprobar
        </h1>
        
        <p>
            Se ha creado un nuevo post que necesita ser aprovado.
        </p>

        <a href=" {{ route('posts.show', $post)}} ">
            Click aquí para aprobar
        </a>
    </body>
</html>