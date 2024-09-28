import { BrowserRouter, Routes, Route, Link } from "react-router-dom";
import CompaniesIndex from "../Pages/Companies/Index";
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/dashboard" element={<CompaniesIndex />} />
      </Routes>
    </BrowserRouter>
  );
}
export default App;