<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * 文章表 迁移
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('article_id');
            $table->integer('cat_id')->comment('文章分类id');
            $table->string('title',100)->comment('文章标题');
            $table->string('code',30)->comment('文章标识');
            $table->text('content')->comment('文章内容');
            $table->string('author',30)->comment('文章作者');
            $table->string('author_email',60)->comment('作者邮箱');
            $table->string('keywords',50)->comment('关键字');
            $table->tinyInteger('position')->comment('文章推荐位(1:首页推荐;2:列表页推荐;4:详情页推荐)');
            $table->tinyInteger('is_open')->comment('是否开启');
            $table->string('file_url')->comment('附件地址');
            $table->string('open_type')->comment('open_type');
            $table->string('link')->comment('链接地址');
            $table->text('description')->comment('文章摘要');
            $table->integer('click')->comment('浏览量');
            $table->integer('publish_time')->comment('文章发布时间');
            $table->string('thumb')->comment('文章缩略图');
            $table->integer('level')->comment('排序,升序');
            $table->rememberToken();            //加入 remember_token 并使用 VARCHAR(100) NULL。
            $table->timestamps();               //加入 created_at 和 updated_at 字段。
            $table->softDeletes();              //加入 deleted_at 字段用于软删除操作。
        });
    }

    /**
     * 删除已存在的数据表.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
