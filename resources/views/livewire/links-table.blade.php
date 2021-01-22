<table class="table">
    <thead>
      <tr>
        <th scope="col">Source</th>
        <th scope="col">Alternative</th>
        <th scope="col">Count</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($links as $link)
            <tr>
                <td>{{$link->source}}</td>
                <td><a href='https://me.bork/l/{{$link->alternative}}' target="_blank">{{$link->alternative}}</a></td>
                <td>{{$link->count}}
                <button wire:click="$emit('postAdded')">Edit</button>
            </tr>
        @endforeach
    </tbody>
</table>
