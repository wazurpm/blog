<x-mail::message>
# Post por aprobar

<x-mail::panel>
Se ha creado un nuevo post que necesita ser aprovado.
</x-mail::panel>


<x-mail::button :url="route('posts.show', $post)"
    color="success">
Click aquí para aprobar
</x-mail::button>

</x-mail::message>