<x-dashboardheader/>

<!--Main Navigation-->
<div class="containerfluid px-3 bg-black">
    <div class="row">
        <x-dashboardside/>
        <div class="col-10 col-md-10 p-0 bg-gray">
            <main class="tab-content" id="A" style="margin-top: 58px">
                <div class="tab-content" id="myTabContent0">
                    <header>
                        <div class="help-container">
                            <!-- Collapsed content -->
                            <div class="collapse mt-3 bg-black border-thin border-gold p-3" id="collapseExample">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident.
                            </div>
                            <!-- Buttons trigger collapse -->
                            <a class="btn btn-black has-arrow-up" data-mdb-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                                تنضیمات صفحه
                                <i class="fas fa-angle-up"></i>
                            </a>
                            <button class="btn btn-black has-arrow-up" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                               راهنما
                                <i class="fas fa-angle-up"></i>
                            </button>


                        </div>
                    </header>
                    <section id="content" class="pt-3">
                        <section id="title" class="d-flex align-items-center">
                            <h1 class="px-3">
                                {{$page_title}}
                            </h1>
                            <a href="{{route('pages.create')}}" class="btn btn-primary bg-light-2 mx-3"> ایجاد صفحه جدید</a>
                        </section>
                        <section class="alert-no-pop alert alert-dismissible fade show" role="alert">
                                <strong>این پنل یک پنل اختصاصی است</strong> شما میتوانید این پنل را برای سایت خود نیز داشته باشید.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </section>
                        <div class="table-heading">
                            <div class="search">
                                <form action="">
                                    @csrf
                                    <input type="text" class="form-control" placeholder="عنوان برگه را وارد کنید" name="pageTitle" required>
                                    <input type="submit" value="جستجوی برگه ها" class="btn btn-primary bg-light-2">
                                </form>
                            </div>
                        </div>
                    
                    </section>
                </div>
            </main>
        </div>
    </div>
</div>
<!--Main layout-->

<!--Main layout-->
<!-- MDB -->
<x-dashboardfooter/>

