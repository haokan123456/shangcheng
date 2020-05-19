<?php

namespace app\admin\controller;

use think\Controller;

class Link extends Controller
{

    public function index()
    {
        $links = db('link')->select();
        $this->assign('links', $links);
        return $this->fetch('list');
    }

    public function add()
    {
        if (!request()->isPost()) {
            return $this->fetch('add');
        } else {
            $data = input('param.');

            $ck_link = validate('Tplinks');
            if ($ck_link->check($data)) {
                // 上传图片
                $file = request()->file('logo');
                if ($file != null) {
                    $data['logo'] = $this->uploadimg($file);
                }
                $res = db('link')->insert($data);
                if ($res) {
                    $this->success('添加成功！');
                } else {
                    $this->error('添加失败！');
                }
            } else {
                $this->error($ck_link->getError());
            }
        }
    }

    public function del()
    {
        $id = input('param.id');
        $res = db('link')->delete($id);
        if ($res) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
    }

    public function edit()
    {
        if (!request()->isPost()) {
            $id = input('param.id');
            $data = db('link')->find($id);
            $this->assign('link', $data);
            return $this->fetch();
        } else {
            $data = input('param.');
            $link = validate('Tplinks');

            if ($link->check($data)) {
                $file = request()->file('logo');
                if ($file) {
                    $this->delimg();
                    $data['logo'] = $this->uploadimg($file);
                }

                $res = db('link')->where('id', $data['id'])->update($data);

                $this->success('修改成功！');

            } else {
                $this->error($link->getError());
            }
        }
    }

    // 上传图片
    public function uploadimg($file)
    {
        $info = $file->move(ROOT_PATH . 'public/static/uploads');
        if ($info) {
            return $info->getSaveName();
        } else {
            $this->error($file->getError());
        }
    }

    public function delimg()
    {
        $id = input('param.id');
        $data = db('link')->find($id);
        if ($data['logo']) {
            $pic = ROOT_PATH . 'public/static/uploads/' . $data['logo'];
            if (file_exists($pic)) {
                @unlink($pic);
            }
        }
    }
}
