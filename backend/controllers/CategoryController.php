<?php
require_once 'controllers/Controller.php';
require_once 'models/Category.php';
class CategoryController extends Controller
{
    public function index()
    {
        $category_model = new Category();
        $cate = $category_model->getAll();
        $this->content = $this->render('views/categories/index.php', [
            'categories' => $cate
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            if (empty($name)) {
                $this->error = 'Cần nhập đầy đủ các trường';
            }
            $avatar = $_FILES['avatar'];
            if ($avatar['error'] == 0) {
                $extension = pathinfo($avatar['name'], PATHINFO_EXTENSION);
                $extension_allowed = ['jpg', 'jpeg', 'png', 'gif'];
                $size_mb = round($avatar['size'] / (1024 * 1024), 2);
                if (!in_array($extension, $extension_allowed)) {
                    $this->error = 'Phải upload đúng định dạng ảnh';
                } elseif ($size_mb > 3) {
                    $this->error = 'Dung lượng ảnh không được lớn hơn 3mb';
                }
            }
            $ava = '';
            if (empty($this->error)) {
                if ($avatar['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $ava = time() . '-' . $avatar['name'];
                    move_uploaded_file($avatar['tmp_name'], $dir_uploads . "/$ava");
                }
                $category_model = new Category();
                $category_model->name = $name;
                $category_model->description = $description;
                $category_model->avatar = $ava;
                $category_model->status = $status;
                $category_create = $category_model->getCreate();
                if ($category_create) {
                    $_SESSION['success'] = 'Thêm mới thành công';
                } else {
                    $_SESSION['error'] = 'Thêm mới thất bại';
                }
                header('Location: index.php?controller=category&action=index');
                exit();
            }
        }
        //Set giá trị cho thuộc tính title
        $this->page_title = 'Trang thêm mới danh mục';
        //Lấy nội dung view tương ứng
        $this->content = $this->render('views/categories/create.php');
        //Gọi layout để hiển thị nội dung view vừa lấy được
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID categories không hợp lệ';
            header('Location: index.php?controller=category&action=index');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Category();
        $cate = $category_model->getCategoryID($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $avatar = $_FILES['avatar'];
            //check validate
            if (empty($name)) {
                $this->error = 'Cần nhập tên';
            } //trường hợp có ảnh upload lên, thì cần kiểm tra điều kiện là file ảnh
            else if ($avatar['error'] == 0) {
                $extension_arr = ['jpg', 'jpeg', 'gif', 'png'];
                $extension = pathinfo($avatar['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $file_size_mb = $avatar['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $extension_arr)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb >= 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            //nếu ko có lỗi thì tiến hành lưu dữ liệu và upload ảnh nếu có
            if (empty($this->error)) {
                $ava = $cate['avatar'];
                //xử lý upload ảnh nếu có
                if ($avatar['error'] == 0) {
                    //xóa file ảnh cũ đi

                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    //xóa file ảnh cũ đi
                    @unlink($dir_uploads . '/' . $ava);
                    //tạo tên file mới và save
                    $ava = time() . '-' . $avatar['name'];

                    move_uploaded_file($avatar['tmp_name'], $dir_uploads . '/' . $ava);
                }
                //lưu vào csdl
                //gọi model để thực  hiện lưu
                $category_model = new Category();
                //gán các giá trị từ form cho các thuộc tính của categories
                $category_model->name = $name;
                $category_model->avatar = $avatar;
                $category_model->description = $description;
                $category_model->status = $status;
                $category_model->updated_at = date('Y-m-d H:i:s');
                //gọi phương thức update theo id
                $is_update = $category_model->getUpdate($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update thành công';
                } else {
                    $_SESSION['error'] = 'Update thất bại';
                }
                header('Location: index.php?controller=category&action=index');
                exit();
            }
        }
        $this->content = $this->render('views/categories/update.php',[
            'category' => $cate
        ]);
        require_once 'views/layouts/main.php';
    }
    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=category&action=index');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Category();
        $is_delete = $category_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa thành công';
        } else {
            $_SESSION['error'] = 'Xóa thất bại';
        }
        header('Location: index.php?controller=category&action=index');
        exit();
    }
    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=category&action=index');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Category();
        $category = $category_model->getCategoryId($id);
        //lấy nội dung view create.php
        $this->content = $this->render('views/categories/detail.php', [
            'category' => $category
        ]);
        //gọi layout để nhúng nội dung view detail vừa lấy đc
        require_once 'views/layouts/main.php';

    }
}
?>