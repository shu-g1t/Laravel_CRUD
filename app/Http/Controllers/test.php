//一覧表示昨日
public function getIndex()
{
   $query = \App\Models\Register::query();
   // 全件取得 +ページネーション
   $registers = $query->orderBy('id', 'desc')->paginate(10);
   return view('register.list')->with('registers',$registers);
}
