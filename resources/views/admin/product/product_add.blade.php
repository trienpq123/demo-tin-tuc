<h1>THÊM DANH MỤC</h1>

<form action="<?php echo route('addProduct') ?>" method="post" id="product_form">
    @if ($errors->any())
     
            <div class="alert alert-danger text-center">
                @foreach ($errors->all() as $error) {
                    <p>{{$error}}</p>
                }
                @endforeach
            </div>   
        
    @endif
    <div class="mb-3">
        <label for="">Ten san pham</label>
        <input type="text" class="form-control" name="product_name" placeholder="ten san pham" value="{{old('product_name')}}">
        @error('product_name')
            <span class="alert-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Gia san pham</label>
        <input type="text" class="form-control" name="product_price" placeholder="ten san pham">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Them san pham</button>
</form>