<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Source</th>
        <th scope="col">Alternative</th>
        <th scope="col">Count</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($links as $link)
            <tr>
                <td>{{$link->name}}</td>
                <td><a href='{{$link->source}}'>{{$link->source}}</a></td>
                <td><a href='{{env('APP_URL')}}/l/{{$link->alternative}}' target="_blank">{{$link->alternative}}</a></td>
                <td>{{$link->count}}
                <td><button class="btn btn-primary" wire:click="$emit('edit_link', {{$link->id}})">Edit</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
