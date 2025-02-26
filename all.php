import React from 'react';
import { Cpu, Mail } from 'lucide-react';

function App() {
  return (
    <div className="min-h-screen bg-gray-50">
      {/* Navigation */}
      <nav className="bg-indigo-600 text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <div className="flex items-center">
              <Cpu className="h-8 w-8" />
              <span className="ml-2 text-xl font-bold">ElectroHub</span>
            </div>
            <button className="flex items-center space-x-2 bg-white text-indigo-600 px-4 py-2 rounded-md hover:bg-indigo-50 transition-colors">
              <Mail className="h-5 w-5" />
              <span>Contact Us</span>
            </button>
          </div>
        </div>
      </nav>

      {/* Hero Section */}
      <div className="relative">
        <div className="absolute inset-0">
          <img
            className="w-full h-[400px] object-cover"
            src="https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&q=80"
            alt="Electronics Banner"
          />
          <div className="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        </div>
        
        <div className="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
          <h1 className="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
            Welcome to ElectroHub
          </h1>
          <p className="mt-6 text-xl text-gray-100 max-w-3xl">
            Discover our premium selection of electronics
          </p>
        </div>
      </div>

      {/* Featured Products */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 className="text-3xl font-bold text-gray-900 mb-8">Our Products</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            {
              name: 'Premium Smartphone',
              price: '$999',
              description: 'Latest generation smartphone with advanced camera system and all-day battery life.',
              image: 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&q=80'
            },
            {
              name: 'Ultra Laptop Pro',
              price: '$1499',
              description: 'Powerful laptop perfect for professionals and creative work.',
              image: 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&q=80'
            },
            {
              name: 'Smart Watch Elite',
              price: '$299',
              description: 'Feature-rich smartwatch with health monitoring and notifications.',
              image: 'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?auto=format&fit=crop&q=80'
            }
          ].map((product, index) => (
            <div key={index} className="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
              <img
                src={product.image}
                alt={product.name}
                className="w-full h-56 object-cover"
              />
              <div className="p-6">
                <h3 className="text-xl font-semibold text-gray-900">{product.name}</h3>
                <p className="text-gray-600 mt-2">{product.description}</p>
                <div className="mt-4 flex items-center justify-between">
                  <span className="text-2xl font-bold text-indigo-600">{product.price}</span>
                  <button className="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition-colors">
                    Buy Now
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>

      {/* Contact Section */}
      <div className="bg-gray-100 py-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-white rounded-lg shadow-xl overflow-hidden">
            <div className="p-8">
              <div className="text-center">
                <h2 className="text-3xl font-bold text-gray-900">Get in Touch</h2>
                <p className="mt-4 text-lg text-gray-600">Have questions? We're here to help!</p>
              </div>
              <form className="mt-8 space-y-6">
                <div className="grid grid-cols-1 gap-6">
                  <div>
                    <label htmlFor="name" className="block text-sm font-medium text-gray-700">
                      Name
                    </label>
                    <input
                      type="text"
                      id="name"
                      className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2"
                      placeholder="Your name"
                    />
                  </div>
                  <div>
                    <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                      Email
                    </label>
                    <input
                      type="email"
                      id="email"
                      className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2"
                      placeholder="your@email.com"
                    />
                  </div>
                  <div>
                    <label htmlFor="message" className="block text-sm font-medium text-gray-700">
                      Message
                    </label>
                    <textarea
                      id="message"
                      rows={4}
                      className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2"
                      placeholder="Your message"
                    />
                  </div>
                </div>
                <div className="flex justify-center">
                  <button
                    type="submit"
                    className="bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition-colors text-lg font-semibold"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-8">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between">
            <div className="flex items-center">
              <Cpu className="h-8 w-8" />
              <span className="ml-2 text-xl font-bold">ElectroHub</span>
            </div>
            <p className="text-gray-400">&copy; 2024 ElectroHub. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>
  );
}

export default App;
