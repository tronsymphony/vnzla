import { useBlockProps, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	Button,
	Flex,
	FlexBlock,
	TextControl,
	SelectControl,
	TabPanel,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, postCategory, links } = attributes
	
	const setLinkAttribute = (link, attribute, value) => {
		setAttributes({
			links: links.map((item) => {
				if (item.name === link.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}
	
	const removeLink = (link) => {
		setAttributes({
			links: links.filter((item) => item.name !== link.name),
		})
	}

	const addLink = (name) => {
		setAttributes({
			links: [
				...links,
				{
					name: name,
					title: 'New Link',
					url: '',
				},
			],
		})
	}
	
	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Blog'}>
				<InspectorAdvancedControls>
					<div className="paddings">
						<Flex>
							<FlexBlock>
								<TextControl
									label="padding top"
									value={paddings.desktop.top}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.desktop.top = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={paddings.mobile.top}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.mobile.top = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl
									label="padding bottom"
									value={paddings.desktop.bottom}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.desktop.bottom = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={paddings.mobile.bottom}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.mobile.bottom = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
						</Flex>
					</div>
					<div className="margins">
						<Flex>
							<FlexBlock>
								<TextControl
									label="margin top"
									value={margins.desktop.top}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.desktop.top = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={margins.mobile.top}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.mobile.top = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl
									label="margin bottom"
									value={margins.desktop.bottom}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.desktop.bottom = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={margins.mobile.bottom}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.mobile.bottom = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
						</Flex>
					</div>
					<div className="background">
						<Flex>
							<FlexBlock>
								<TextControl
									label="Default background"
									value={gradient}
									className="input"
									onChange={(value) => setAttributes({ gradient: value })}
								/>
							</FlexBlock>
						</Flex>
					</div>
				</InspectorAdvancedControls>
				<div className="settings">
					<div style={{ marginTop: "0px" }}>
						<h3>Links</h3>
						
						<TabPanel className='links' tabs={links}>
							{(link) => (
								<Placeholder className={'placeholder'} style={{ minHeight: "auto" }}>
									<div className="row">
										<TextControl
											className="input"
											label="Title"
											value={link.title}
											onChange={(value) => {
												setLinkAttribute(link, 'title', value)
											}}
										/>
										
										<TextControl
											className="input"
											label="URL"
											value={link.url}
											onChange={(value) => {
												setLinkAttribute(link, 'url', value)
											}}
										/>
									</div>
									
									{links.length > 1 && (
										<div className="row" style={{ marginTop: "10px" }}>
											<a href="#" onClick={() => removeLink(link)}>
												Delete the Link
											</a>
										</div>
									)}
								</Placeholder>
							)}
						</TabPanel>
						
						<Button variant="primary" className="primary-button" onClick={() => addLink(Math.random())}>
							Add a New Link
						</Button>
					</div>
					
					<div style={{ marginTop: "10px" }}>
						<h3>Custom Post Type</h3>
						
						<div className="row">
							<SelectControl
								label="Select a custom post type"
								value={postCategory}
								className="select"
								onChange={(value) => {
									setAttributes({ postCategory: value })
								}}
								options={[
									{ label: 'None', value: '' },
									{ label: 'Nota de Prensa', value: 'nota-de-prensa' },
									{ label: 'Library', value: 'library' }
								]}
							/>
							
							<TextControl
								label="Category Title"
								value={title}
								className="input"
								onChange={(value) => {
									setAttributes({ title: value })
								}}
							/>
						</div>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
