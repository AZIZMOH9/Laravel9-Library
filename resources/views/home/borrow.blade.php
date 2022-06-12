<h2>borrow</h2>
<br>
<form class="main-form" action="{{route('storeborrow')}}" method="post">
    @csrf
    <input type="hidden" id="product_id" value="{{$product_id}}" name="product_jd">
    <input type="hidden"  name="policlinic_id" class="form-control" value="{{$data->id}}" >
    <div class="row mb-3">
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label for="rate">days</label>
            <select name="days" id="days"  class="custom-select">
                <option  value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
        </div>
        <label for="birthday">book date:</label>
        <input type="date" id="birthday" name="book">
        <div class="form-group">
            <label>keyword Input</label>
            <input type="text" class="form-control" name="note" placeholder="note">
        </div>
        <label>status</label>
        <select class="form-control" name="status">
            <option>true</option>
            <option>false</option>
        </select>
    </div>
    @auth()
        <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
    @else

        <a href="/login" class="btn btn-danger"> For Submit Your Comment ,Please Login</a>
    @endauth
</form>
