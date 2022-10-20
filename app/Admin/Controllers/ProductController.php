<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
Use Encore\Admin\Admin;
use DB;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('price', __('Price'));
        $grid->column('set_id', __('Set id'));
        $grid->column('color_id', __('Color id'));
        $grid->column('size_id', __('Size id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('member_id', __('Member id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
   
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('price', __('Price'));
        $show->field('set_id', __('Set id'));
        $show->field('color_id', __('Color id'));
        $show->field('size_id', __('Size id'));
        $show->field('category_id', __('Category id'));
        $show->field('member_id', __('Member id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $sets = DB::table('sets')->orderBy('id', 'desc')->get();
        $setsList = array();
        foreach ($sets as $set){
            $setsList[$set->id] = $set->name;
        }
        $form->select('set_id', 'Sets')->options($setsList);

        $members = DB::table('members')->orderBy('name')->get();
        $membersList = array();
        foreach ($members as $member){
            $membersList[$member->id] = $member->name;
        }
        $form->select('member_id', 'Family Member')->options($membersList);

        $colors = DB::table('colors')->get();
        $colorsList = array();
        foreach ($colors as $color){
            $colorsList[$color->id] = $color->name;
        }
        $form->select('color_id', 'Colors')->options($colorsList);

        $sizes = DB::table('sizes')->orderBy('display_order')->get();
        $sizesList = array();
        foreach ($sizes as $size){
            $sizesList[$size->id] = $size->name;
        }
        $form->select('size_id', 'Size')->options($sizesList);
        

        $categories = DB::table('categories')->get();
        $categoriesList = array();
        foreach ($categories as $category){
            $categoriesList[$category->id] = $category->name;
        }
        $form->select('category_id', 'Category')->options($categoriesList);


        $form->decimal('price', __('Price'));
        return $form;
    }
}
