<?php

namespace App\Http\Resources;

use Collective\Html\FormFacade as Form;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogDatatableResource extends JsonResource
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
        if (hasPermission('blog','write')) {
            $edit = "<a href='" . route('blogs.edit', base64_encode($this->id)) . "'
						class='btn btn-default btn-sm btn-edit-action'
						data-title='Edit' data-toggle='tooltip' data-placement='top'>
						<i class='fas fa-pen text-primary'></i>
					</a>&nbsp;";
        }

        $delete = '';
        if (hasPermission('blog','delete')) {
            $delete = Form::open(['route' => ['blogs.destroy', base64_encode($this->id)], 'method' => 'delete', 'class' => 'd-inline'])
                . "<button type='submit' class='btn btn-default btn-sm action-delete delete' style='border: 1px solid #ef0b0b;'
					             data-title='Delete' data-toggle='tooltip' data-placement='top'>
                                <i class='fas text-red fa-trash'></i>
                         </button>"
                . Form::close();
        }
        return [
            'id' => $this->id,
            'thumbnail' => '<img src="'.url($this->thumbnail).'" class="img-fluid" style="height:40px;border-radius: 5px; border: 1px solid #efefef" ">',
            'title_en' => $this->title_en ,
            'text_en' => substr(strip_tags($this->text_en), 0, 250),
           'action' => $edit. $delete
        ];

    }
}
