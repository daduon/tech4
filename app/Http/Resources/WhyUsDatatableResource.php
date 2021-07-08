<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Collective\Html\FormFacade as Form;
class WhyUsDatatableResource extends JsonResource
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
        if (hasPermission('why_us','write')) {
            $edit = "<a href='" . route('why-us.edit', base64_encode($this->id)) . "'
						class='btn btn-default btn-sm btn-edit-action'
						data-title='Edit' data-toggle='tooltip' data-placement='top'>
						<i class='fas fa-pen text-primary'></i>
					</a>&nbsp;";
        }

        $delete = '';
        if (hasPermission('why_us','delete')) {
            $delete = Form::open(['route' => ['why-us.destroy', base64_encode($this->id)], 'method' => 'delete', 'class' => 'd-inline'])
                . "<button type='submit' class='btn btn-default btn-sm action-delete delete' style='border: 1px solid #ef0b0b;'
					             data-title='Delete' data-toggle='tooltip' data-placement='top'>
                                <i class='fas text-red fa-trash'></i>
                         </button>"
                . Form::close();
        }
        return [
            'id' => $this->id,
            'icon_img' => '<img src="'.url($this->icon_img).'" class="img-fluid" style="height:40px;border-radius: 5px; background-color: #6b6b6b; border: 1px solid #efefef" ">',
            'title_en' => $this->title_en ,
            'short_text_en' => $this->short_text_en,
            'action' => $edit. $delete
        ];

    }
}
