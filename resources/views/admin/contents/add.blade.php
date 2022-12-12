@extends('admin.home')

@section('content')


<div class="container">
<form action="{{ url('content_create') }}" method="POST" role="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Secton and layout</h1>
                <label for="section">Section for element</label>
                    <select class="form-control" name="section" id="section">
                        <option>1</option>
                        <option>2</option>
                    </select>
                <label for="column_type">Layout</label>
                    <select class="form-control" name="column_type" id="column_type">
                        <option>1</option>
                        <option>2</option>
                    </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
        <h1 class="mb-2">Column I</h1>

                <label for="block_margin_top">Margin top of block</label>
                    <input type="text" class="form-control" name="block_margin_top"/>
                <label for="block_margin_bottom">Margin bottom of block</label>
                    <input type="text" class="form-control" name="block_margin_bottom"/>

                <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"/>
                <label for="title_color">Title color</label>
                    <input type="text" class="form-control" name="title_color"/>
                <label for="title_size">Title size</label>
                    <input type="text" class="form-control" name="title_size"/>

                <label for="title_position">Title position</label>
                    <select class="form-control" name="title_position" id="title_position">
                        <option>left</option>
                        <option>right</option>
                        <option>center</option>
                    </select>
                    
                <label for="title_margin_top">Margin top</label>
                    <input type="text" class="form-control" name="title_margin_top"/>
                <label for="title_margin_bottom">Margin bottom</label>
                    <input type="text" class="form-control" name="title_margin_bottom"/>

                <label for="content">Content</label>
                    <textarea type="text" class="form-control" name="content"></textarea>
                <label for="content_color">Content color</label>
                    <input type="text" class="form-control" name="content_color"/>
                <label for="content_size">Content size</label>
                    <input type="text" class="form-control" name="content_size"/>
                
                <label for="content_position">Content position</label>
                    <select class="form-control" name="content_position" id="content_position">
                        <option>left</option>
                        <option>right</option>
                        <option>center</option>
                    </select>

                <label for="content_margin_top">Margin top</label>
                    <input type="text" class="form-control" name="content_margin_top"/>
                <label for="content_margin_bottom">Margin bottom</label>
                    <input type="text" class="form-control" name="content_margin_bottom"/>
        </div>
        <div class="col-6">
        <h1 class="mb-2">Column II</h1>
                <label for="block_2_margin_top">Margin top of block</label>
                    <input type="text" class="form-control" name="block_2_margin_top"/>
                <label for="block_2_margin_bottom">Margin bottom of block</label>
                    <input type="text" class="form-control" name="block_2_margin_bottom"/>

                <label for="title_2">Title 2</label>
                    <input type="text" class="form-control" name="title_2"/>
                <label for="title_color_2">Title color 2</label>
                    <input type="text" class="form-control" name="title_color_2"/>
                <label for="title_size_2">Title size 2</label>
                    <input type="text" class="form-control" name="title_size_2"/>

                <label for="title_position_2">Title position 2</label>
                    <select class="form-control" name="title_position_2" id="title_position_2">
                        <option>left</option>
                        <option>right</option>
                        <option>center</option>
                    </select>

                <label for="title_margin_top_2">Margin top</label>
                    <input type="text" class="form-control" name="title_margin_top_2"/>
                <label for="title_margin_bottom_2">Margin bottom</label>
                    <input type="text" class="form-control" name="title_margin_bottom_2"/>

                <label for="content_2">Content</label>
                    <textarea type="text" class="form-control" name="content_2"></textarea>
                <label for="content_color_2">Content color 2</label>
                    <input type="text" class="form-control" name="content_color_2"/>
                <label for="content_size_2">Content size 2</label>
                    <input type="text" class="form-control" name="content_size_2"/>

                <label for="content_position_2">Content position 2</label>
                    <select class="form-control" name="content_position_2" id="content_position_2">
                        <option>left</option>
                        <option>right</option>
                        <option>center</option>
                    </select>

                <label for="content_margin_top_2">Margin top 2</label>
                    <input type="text" class="form-control" name="content_margin_top_2"/>
                <label for="content_margin_bottom_2">Margin bottom 2</label>
                    <input type="text" class="form-control" name="content_margin_bottom_2"/>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center mb-4">    
            <input type="submit" value="Add" class="btn btn-primary mt-2" />
        </div>  
    </div>
</form>
</div>



@endsection('content')