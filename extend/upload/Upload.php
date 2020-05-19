<?php
namespace app;

class Upload
{
    public function shangchuan($thumb)
    {
        $file = request()->file($thumb);
        $info = $file->move(ROOT_PATH . 'public/static/uploads');
        if($info){
            return $info->getSaveName()
        }
        else{
            $this->error($file->getError());
        }
    }
}
