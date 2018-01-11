<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCatsTable extends Migration
{
    /**
     * 分类迁移.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_cats', function (Blueprint $table) {
            $table->increments('cat_id');
            $table->string('cat_name',30)->comment('分类名称');
            $table->string('cat_code',30)->comment('分类标识');
            $table->string('cat_type')->comment('系统分组');
            $table->integer('pid')->comment('父级ID');
            $table->integer('list_row')->comment('列表每页行数');
            $table->tinyInteger('show_in_nav')->comment('是否导航显示');
            $table->integer('sort')->comment('排序');
            $table->string('meta_title',30)->comment('SEO的网页标题');
            $table->string('meta_keywords')->comment('搜索关键词');
            $table->text('meta_description')->comment('分类描述');
            $table->string('template_index')->comment('频道页模板');
            $table->string('template_lists')->comment('列表页模板');
            $table->string('template_detail')->comment('详情页模板');
            $table->string('template_edit')->comment('编辑页模板');
            $table->string('link_id')->comment('外链');
            $table->tinyInteger('allow_publish')->comment('是否允许发布内容');
            $table->tinyInteger('display')->comment('可见性');
            $table->tinyInteger('reply')->comment('是否允许回复');
            $table->tinyInteger('check')->comment('发布的文章是否需要审核');
            $table->string('cat_alias')->comment('别名');
            $table->string('thumb')->comment('分类图片');
            $table->string('icon')->comment('分类图标');
            $table->integer('status')->comment('数据状态');
            $table->rememberToken();            //加入 remember_token 并使用 VARCHAR(100) NULL。
            $table->timestamps();               //加入 created_at 和 updated_at 字段。
            $table->softDeletes();              //加入 deleted_at 字段用于软删除操作。
            
            $table->unique('cat_code'); //索引
            $table->index('pid');       //索引
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_cat');
    }
}
