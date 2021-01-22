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
                <td><a href='https://me.bork/l/{{$link->alternative}}' target="_blank">{{$link->alternative}}</a></td>
                <td>{{$link->count}}
                <td><button class="btn btn-primary" wire:click="$emit('postAdded')" disabled>Edit</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
