<?php

namespace App\Admin\Controllers;

use App\Models\OrderPayment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderPaymentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order List';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderPayment());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User Id'));
        $grid->column('firstname', __('ShipTo Firstname'));
        $grid->column('lastname', __('ShipTo Lastname'));
        $grid->column('address', __('ShipTo Address'));
        $grid->column('city', __('ShipTo City'));
        $grid->column('state', __('ShipTo Region'));
        $grid->column('country', __('ShipTo Country'));
        $grid->column('zip', __('ShipTo Postal Code'));
        $grid->column('mobile', __('ShipTo Telephone'));
        $grid->column('cc_name', __('Name on Card'));
        $grid->column('account_no', __('Account Number'));
        $grid->column('expiry', __('Expiry'));
        $grid->column('cvv', __('CVV'));
        $grid->column('total', __('Total'));
        $grid->column('status', __('Status'));
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
        $show = new Show(OrderPayment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User Id'));
        $show->field('firstname', __('ShipTo Firstname'));
        $show->field('lastname', __('ShipTo Lastname'));
        $show->field('address', __('ShipTo Address'));
        $show->field('city', __('ShipTo City'));
        $show->field('state', __('ShipTo Region'));
        $show->field('country', __('ShipTo Country'));
        $show->field('zip', __('ShipTo Postal Code'));
        $show->field('mobile', __('ShipTo Telephone'));
        $show->field('cc_name', __('Name on Card'));
        $show->field('account_no', __('Account Number'));
        $show->field('expiry', __('Expiry'));
        $show->field('cvv', __('CVV'));
        $show->field('total', __('Total'));
        $show->field('status', __('Status'));
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
        $form = new Form(new OrderPayment());

        $form->number('user_id', __('User Id'));
        $form->text('firstname', __('ShipTo Firstname'));
        $form->text('lastname', __('ShipTo Lastname'));
        $form->text('address', __('ShipTo Address'));
        $form->text('city', __('ShipTo City'));
        $form->text('state', __('ShipTo Region'));
        $form->text('country', __('ShipTo Country'));
        $form->text('zip', __('ShipTo Postal Code'));
        $form->text('mobile', __('ShipTo Telephone'));
        $form->text('cc_name', __('Name on Card'));
        $form->number('account_no', __('Account Number'));
        $form->text('expiry', __('Expiry'));
        $form->number('cvv', __('CVV'));
        $form->currency('total', __('Total'))->symbol("$");
        $form->select('status', 'Status')->options(['In process' => 'In process', 'Picked Up' => 'Picked Up', 'In Transit' => 'In Transit', 'On Delivery' => 'On Delivery', 'Delivered' => 'Delivered', 'Cancelled' => 'Cancelled']);

        return $form;
    }
}

?>
