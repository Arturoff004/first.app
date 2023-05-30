<div>
    <input type="text" placeholder="Search user..." wire:model='user_text'>
                <table border="" class="br-3">
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                    @foreach ($user as $v)
                        <tr>
                            <td>{{$v->name}}</td>
                            <td>{{$v->email}}</td>
                        </tr>
                    @endforeach
                </table>
</div>