<?php

namespace app\admin\controller;

use Catetree\Cates;
use think\Controller;

class Article extends Controller
{
    public function index()
    {
        $arts = db('article')->alias('a')->field('a.*,b.cate_name')->join('cate b', 'a.cate_id=b.id')->paginate(2);
        $this->assign('arts', $arts);
        return $this->fetch('list');
    }

    public function add()
    {
        if (!request()->isPost()) {
            $cts = new Cates();
            $rs = $cts->getCates();
            $this->assign('cates', $rs);
            return $this->fetch();
        } else {
            $data = input('param.');

            if ($_FILES['thumb']['tmp_name'] != "") {
                $data['thumb'] = $this->uploads();
            }
            $data['addtime'] = strtotime(date('Y-m-d'));
            $res = db('article')->insert($data);
            if ($res) {
                $this->success('添加成功!');
            } else {
                $this->error('添加失败！');
            }
        }
    }

    public function del()
    {
        $id = input('param.id');
        $res = db('article')->delete($id);
        if ($res) {
            $this->success('删除成功!');
        } else {
            $this->error('删除失败！');
        }
    }

    public function edit()
    {
        if (!request()->isPost()) {
            $id = input('param.id');
            $art = db('article')->find($id);
            $cts = new Cates();
            $rs = $cts->getCates();
            $this->assign(['cates' => $rs, 'art' => $art]);
            return $this->fetch();
        } else {
            $data = input('param.');
            $obj = db('article');
            if ($_FILES['thumb']['tmp_name'] != "") {
                $this->del_thumb($data['id']);
                $data['thumb'] = $this->uploads();
            }

            $data['addtime'] = strtotime(date('Y-m-d'));

            $res = $obj->where('id', $data['id'])->update($data);
            if ($res) {
                $this->success('修改成功!');
            } else {
                $this->error('修改失败！');
            }
        }
    }

    /**
     * 上传图片
     */
    public function uploads()
    {
        $file = request()->file('thumb');

        if ($file) {
            $info = $file->move(IMG_UPLOADS);
            return $info->getSaveName();
        }
    }

    /**
     * 删除缩略图
     */
    public function del_thumb($id)
    {
        $pic = db('article')->field('thumb')->find($id);
        $img = IMG_UPLOADS . '/' . $pic['thumb'];
        if (is_file($img) and file_exists($img)) {
            @unlink($img);
        }
    }

    /**
     * 文章图片管理
     */
    public function picmg()
    {
        $mulu = IMG_UPLOADS;
        $pics = $this->readimgs($mulu);
        $pics = str_replace('\\', '/', $pics);
        $this->assign('imgs', $pics);
        return $this->fetch();
    }

    public function readimgs($dir)
    {
        static $file = array();
        $nav = opendir($dir);
        if ($nav) {
            while (false !== $fe = readdir($nav)) {
                if ($fe != "." and $fe != "..") {
                    $nv = $dir . DS . $fe;
                    if (is_dir($nv)) {
                        $this->readimgs($nv);
                    } else {
                        $file[] = $nv;
                    }
                }
            }
            return $file;
        }
        closedir($dir);
    }

    /**
     * 删除图片
     */
    public function delimg()
    {
        $ff = input('param.f');
        $ff = str_replace("/", "\\", $ff);
        $ff = str_replace(IMG_UPLOADS, PIC_UP, $ff);

        $res = @unlink($ff);
        if ($res) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
    }
}
