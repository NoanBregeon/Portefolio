export default function Footer() {
  const year = new Date().getFullYear();
  
  return (
    <footer className="bg-gray-900/90 backdrop-blur-md border-t border-gray-800 text-gray-400 py-8 mt-auto">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p>&copy; {year} Mon Portfolio. Fait avec <span className="text-red-500 animate-pulse">❤</span> et React.</p>
      </div>
    </footer>
  );
}
