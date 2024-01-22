<form action="{{route('plants.update',['id'=>$plant->name])}}" method="POST" >
    @method('PUT')

    {{csrf_field()}}
    <label for="name">Name*:</label>
    <input type="text" id="name" name="name" required value="{{$plant->name}}">.

    <br>

    <label for="discover_date">Discover Date (YYYY-mm-dd)*:</label>
    <input type="text" id="discovery_date" name="discovery_date" required value="{{$plant->discovery_date}}">


    <input type="submit" value="Actualizar">
</form>
