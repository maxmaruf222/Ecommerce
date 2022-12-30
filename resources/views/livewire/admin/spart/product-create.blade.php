<div class="container">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create new posts</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action=""
        >
            <div class="card-body">
                <div class="form-group">
                    <label for="category">Select category</label>
                    <select name="category" id="" class="form-control">
                        <option value="">
                            category
                                <option value="">__subcategory</option>
                                <option value="">__subcategory</option>
                                <option value="">__subcategory</option>
                        </option>
                        <option value="">
                            category
                                <option value="">__subcategory</option>
                                <option value="">__subcategory</option>
                                <option value="">__subcategory</option>
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="posttitle">Post Title</label>
                    <input name="title"  type="text" class="form-control" id="posttitle" placeholder="post title">
                </div>
                <div>
                    <label for="postdec">Post Description</label>
                    <textarea name="des" type="text"  class="form-control" cols="30" rows="10" placeholder="description..."></textarea>
                </div>
                <div class="form-group">
                    <label for="originalprice">Original price</label>
                    <input name="original_price"  type="number" class="form-control" id="originalprice" placeholder="original price">
                </div>
                <div class="form-group">
                    <label for="oldprice">Old price</label>
                    <input name="old_price" type="number" class="form-control" id="oldprice" placeholder="old price">
                </div>
                <div class="form-group">
                    <label for="disper">Discount percentage</label>
                    <input name="dis_per" type="disper" class="form-control" id="disper" placeholder="discount percentage">
                </div>
                <div class="form-group">
                    <label for="newprice">new price</label>
                    <input type="new_price" class="form-control" id="newprice" placeholder="new price">
                </div>
                <div class="form-group">
                    <label for="productqty">Product quantity</label>
                    <input type="qty" class="form-control" id="productqty" placeholder="product quantity">
                </div>
                <div class="form-group">
                    <label for="metatitle">Meta Title</label>
                    <input type="meta_title" class="form-control" id="metatitle" placeholder="meta title">
                </div>
                <div class="form-group">
                    <label for="metadec">Meta description</label>
                    <input type="meta_dec" class="form-control" id="metadec" placeholder="meta description">
                </div>
                <div class="form-group">
                    <label for="metakey">Meta keyword</label>
                    <input type="meta_key" class="form-control" id="metakey" placeholder="meta keyword">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create now</button>
            </div>
        </form>
    </div> 
</div>