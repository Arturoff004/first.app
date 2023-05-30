<div>
    <input type="text" placeholder="Search post..." wire:model='post_text'>
                <table border="">
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                    @foreach ($post as $v)
                        <tr>
                            <td>{{$v->title}}</td>
                            <td>{{$v->body}}</td>
                        </tr>
                    @endforeach
                </table>
</div>
