@extends('layoutDashboard.main')
@section('content')
<style>
/* .my-section-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; Atur tinggi container, sesuaikan kebutuhan
    Tambahan gaya sesuai kebutuhan
} */
</style>
    <section class="w-full">
        <div class="contentFormUpdateProfil border border-black w-full p-6 rounded-xl" id="updateProfil">
            <div class="headUpdate text-4xl font-bold text-center">
                <h2>Update Profil Anda</h2>
            </div>
            <div class="contentForm w-full mt-8">
                <form action="" method="">
                    <div class="listForm flex items-center w-full gap-3">
                        <div class="itemLabels flex-shrink-0">
                            <div class="listLabels space-y-2 flex flex-col justify-center">
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Nama</label>
                                    </div>
                                </div>
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Nomor Hp</label>
                                    </div>
                                </div>
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Email</label>
                                    </div>
                                </div>
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Username</label>
                                    </div>
                                </div>
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Password</label>
                                    </div>
                                </div>
                                <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Alamat</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="itemInputs w-full">
                            <div class="listInputs space-y-2">
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <input type="text" name="" id="" class="border border-black outline-none w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
@endsection