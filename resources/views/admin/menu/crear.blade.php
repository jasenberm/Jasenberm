@extends('welcome')

<div class="row">
        <div class="col-lg-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">CREAR MENUS</h3>
                </div>
                <form class="form-horizontal" action="">
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">
    
                    </div>    
                </form>
            </div>
        </div>
    </div>    
