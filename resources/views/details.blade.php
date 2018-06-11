<form method="POST" action="/saveDetails" >
    <div class="modal-dialog">
        <div class="modal-content">
            <input type="hidden" name="id" value="{{$id}}">
            @csrf
            <div>
                <select name="image_type" style="width: 450px;margin-left: 10px;">
                    <option>Hotel</option>
                    <option>tour</option>
                </select>
            </div>
            <div>
                <select name="region" style="width: 450px;margin-left: 10px;">
                    <option>gakenke</option>
                    <option>rulindo</option>
                    <option>burera</option>
                    <option>musanze</option>
                    <option>gicumbi</option>
                </select>
            </div>>
            <div>
                <textarea name="description" type="text" style="min-width: 400px;margin-left: 40px;"></textarea>
            </div>
            <div style="margin-left: 45px">
                <input type="text" placeholder="latitude" name="latitude">
                <input type="text" placeholder="longitude" name="longitude">
            </div><br>
            <button class="btn btn-primary rounded-0" type="submit">Save Details</button>
        </div>
    </div>
</form>