import React, { Component } from "react";
import axios from "axios";

class CompaniesIndex extends Component {
  constructor(props) {
    super(props);
    this.state = {
      companies: [],
      loading: true,  // Added loading state
      error: null,    // Added error state
    };
  }

  fetchCompanies() {
    axios
      .get("/api/companies")
      .then((response) => {
        this.setState({ companies: response.data.data, loading: false });
      })
      .catch((error) => {
        this.setState({ error: "Error fetching companies", loading: false });
      });
  }

  componentDidMount() {
    this.fetchCompanies();
  }

  renderCompanies() {
    if (this.state.companies.length === 0) {
      return (
        <tr>
          <td colSpan="4" className="text-center py-4">
            No companies found.
          </td>
        </tr>
      );
    }

    return this.state.companies.map((company) => (
      <tr key={company.id}>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {company.name}
        </td>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {company.email}
        </td>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {company.address}
        </td>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          {company.website}
        </td>
      </tr>
    ));
  }

  render() {
    const { loading, error } = this.state;

    if (loading) {
      return <div className="text-center py-4">Loading companies...</div>;
    }

    if (error) {
      return <div className="text-center py-4 text-red-600">{error}</div>;
    }

    return (
      <div className="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
        <div className="min-w-full align-middle">
          <table className="min-w-full divide-y divide-gray-200 border">
            <thead>
              <tr>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">
                    Name
                  </span>
                </th>
                <th className="px-6 py-3 bg-gray-50">
                  <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">
                    Email
                  </span>
                </th>
                <th className="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody className="table-body">
              <tr key='1'>
        <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
          ssssssssssssss
        </td>
      </tr>
            </tbody>
          </table>
        </div>
      </div>
    );
  }
}

export default CompaniesIndex;
