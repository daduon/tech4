<?php

namespace App\Http\Resources;

use Collective\Html\FormFacade as Form;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseDatatableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $edit = '';
        if (hasPermission('course','write')) {
            $edit = "<a href='" . route('courses.edit', base64_encode($this->id)) . "'
						class='btn btn-default btn-sm btn-edit-action'
						data-title='Edit' data-toggle='tooltip' data-placement='top'>
						<i class='fas fa-pen text-primary'></i>
					</a>&nbsp;";
        }

        $delete = '';
        if (hasPermission('course','delete')) {
            $delete = Form::open(['route' => ['courses.destroy', base64_encode($this->id)], 'method' => 'delete', 'class' => 'd-inline'])
                . "<button type='submit' class='btn btn-default btn-sm action-delete delete' style='border: 1px solid #ef0b0b;'
					             data-title='Delete' data-toggle='tooltip' data-placement='top'>
                                <i class='fas text-red fa-trash'></i>
                         </button>"
                . Form::close();
        }
        return [
            'program' => $this->program->title_en,
            'title' => $this->title_en,
            'subtitle' => $this->sub_title_en,
            'price' => '$'.$this->price,
            'start_date' => date('d-M-Y',strtotime($this->date_from)),
            'end_date' => date('d-M-Y',strtotime($this->date_to)),
            'seat_left' => $this->seat_lef ? $this->seat_lef : 0,
            'action' => $edit. $delete
        ];
    }
}
