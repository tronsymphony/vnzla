import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import SVG1 from './assets/card.svg'
import SVG2 from './assets/pdf.svg'
import SVG3 from './assets/page.svg'
import SVG4 from './assets/21.svg'
import SVG5 from './assets/bag.svg'
import SVG6 from './assets/tablet.svg'
import SVG7 from './assets/image.svg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const {
		paddings,
		margins,
		gradient,
		title,
		title1,
		title2,
		title3,
		items1,
		items2,
		items3,
		extra1,
		extra2,
		extra3,
		outlinedButton,
		outlinedButtonTarget,
		primaryButton,
		primaryButtonTarget,
		extraText,
		extraLink,
		extraLinkTarget,
		bigSpacing,
		initialNoOpened1,
		initialNoOpened2,
		initialNoOpened3,
	} = attributes

	const setItemAttribute1 = (tab, attribute, value) => {
		setAttributes({
			items1: items1.map((item) => {
				if (item.name === tab.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}

	const removeItem1 = (tab) => {
		setAttributes({
			items1: items1.filter((item) => item.name !== tab.name),
		})
	}

	const addItem1 = (name) => {
		setAttributes({
			items1: [
				...items1,
				{
					name: name,
					title: 'New',
					description: '',
					widths: {
						title: '300px',
						mTitle: '100%',
						text: '300px',
						mText: '100%',
					},
					image: {
						alt: '',
						url: '',
					},
				},
			],
		})
	}

	const setItemAttribute2 = (tab, attribute, value) => {
		setAttributes({
			items2: items2.map((item) => {
				if (item.name === tab.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}

	const removeItem2 = (tab) => {
		setAttributes({
			items2: items2.filter((item) => item.name !== tab.name),
		})
	}

	const addItem2 = (name) => {
		setAttributes({
			items2: [
				...items2,
				{
					name: name,
					title: 'New',
					description: '',
					widths: {
						title: '300px',
						mTitle: '100%',
						text: '300px',
						mText: '100%',
					},
					image: {
						alt: '',
						url: '',
					},
				},
			],
		})
	}

	const setItemAttribute3 = (tab, attribute, value) => {
		setAttributes({
			items3: items3.map((item) => {
				if (item.name === tab.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}

	const removeItem3 = (tab) => {
		setAttributes({
			items3: items3.filter((item) => item.name !== tab.name),
		})
	}

	const addItem3 = (name) => {
		setAttributes({
			items3: [
				...items3,
				{
					name: name,
					title: 'New',
					description: '',
					widths: {
						title: '300px',
						mTitle: '100%',
						text: '300px',
						mText: '100%',
					},
					image: {
						alt: '',
						url: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Banner with buttons tabs'}>
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
					<Flex>
						<FlexBlock>
							<TextControl
								label="Title"
								value={title}
								className="input"
								onChange={(value) => setAttributes({ title: value })}
							/>
						</FlexBlock>
					</Flex>
					<div className="block">
						<div className="row">
							<TextControl
								label="First tab title"
								value={title1}
								className="input"
								onChange={(value) => {
									setAttributes({ title1: value })
								}}
							/>
						</div>
						<TabPanel tabs={items1}>
							{(tab) => (
								<Placeholder className={'placeholder'}>
									<div className="row">
										<TextControl
											label="Title"
											value={tab.title}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'title', value)}
										/>
									</div>
									<div className="row">
										<TextareaControl
											label="Description"
											value={tab.description}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'description', value)}
										/>
									</div>
									<div className="block">
										<div className="row">
											<TextControl
												label="Button (optional)"
												value={tab.button}
												className="input"
												onChange={(value) => setItemAttribute1(tab, 'button', value)}
											/>
										</div>
										<div className="row">
											<TextControl
												label="Button Link"
												value={tab.target}
												className="input"
												onChange={(value) => setItemAttribute1(tab, 'target', value)}
											/>
										</div>
									</div>
									<div className="row">
										<TextControl
											label="Title Width"
											value={tab.widths.title}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'widths', { ...tab.widths, title: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mTitle}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'widths', { ...tab.widths, mTitle: value })}
										/>
									</div>
									<div className="row">
										<TextControl
											label="Description Width"
											value={tab.widths.text}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'widths', { ...tab.widths, text: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mText}
											className="input"
											onChange={(value) => setItemAttribute1(tab, 'widths', { ...tab.widths, mText: value })}
										/>
									</div>
									<div className="row">
										<BaseControl label="Image">
											<MediaUpload
												onSelect={(value) => setItemAttribute1(tab, 'image', value)}
												type="image"
												render={({ open }) => (
													<Button className="button" onClick={open}>
														{tab.image.url == 'card.svg' ? (
															<img src={SVG1} alt={'icon'} />
														) : tab.image.url == 'pdf.svg' ? (
															<img src={SVG2} alt={'icon'} />
														) : tab.image.url == 'page.svg' ? (
															<img src={SVG3} alt={'icon'} />
														) : tab.image.url == '21.svg' ? (
															<img src={SVG4} alt={'icon'} />
														) : tab.image.url == 'bag.svg' ? (
															<img src={SVG5} alt={'icon'} />
														) : tab.image.url == 'tablet.svg' ? (
															<img src={SVG6} alt={'icon'} />
														) : tab.image.url == 'image.svg' ? (
															<img src={SVG7} alt={'icon'} />
														) : tab.image.url ? (
															<img src={tab.image.url} alt={tab.image.alt} />
														) : (
															'Insert'
														)}
													</Button>
												)}
											/>
											<Button
												icon="dismiss"
												showTooltip="true"
												label="Delete image"
												className="delete-button"
												onClick={() => setItemAttribute1(tab, 'image', { url: '', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n1"
												onClick={() => setItemAttribute1(tab, 'image', { url: 'card.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n2"
												onClick={() => setItemAttribute1(tab, 'image', { url: 'pdf.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n3"
												onClick={() => setItemAttribute1(tab, 'image', { url: 'page.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n4"
												onClick={() => setItemAttribute1(tab, 'image', { url: '21.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n5"
												onClick={() => setItemAttribute1(tab, 'image', { url: 'bag.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n6"
												onClick={() => setItemAttribute1(tab, 'image', { url: 'image.svg', alt: '' })}
											/>
										</BaseControl>
									</div>
									<Button variant="primary" className="primary-button" onClick={() => removeItem1(tab)}>
										Delete
									</Button>
								</Placeholder>
							)}
						</TabPanel>
						<Button variant="primary" className="primary-button" onClick={() => addItem1(Math.random())}>
							Add new
						</Button>
						<div className="row">
							<TextControl
								label="Hidden Block button"
								value={extra1.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra1 }
									newValue.button = value
									setAttributes({ extra1: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextareaControl
								label="Hidden Block content"
								value={extra1.content}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra1 }
									newValue.content = value
									setAttributes({ extra1: newValue })
								}}
							/>
						</div>
						<div className="row">
							<CheckboxControl
								label="Initial No Opened"
								checked={initialNoOpened1}
								onChange={(value) => setAttributes({ initialNoOpened1: value })}
								className="checkbox"
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Second tab title"
								value={title2}
								className="input"
								onChange={(value) => {
									setAttributes({ title2: value })
								}}
							/>
						</div>
						<TabPanel tabs={items2}>
							{(tab) => (
								<Placeholder className={'placeholder'}>
									<div className="row">
										<TextControl
											label="Title"
											value={tab.title}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'title', value)}
										/>
									</div>
									<div className="row">
										<TextareaControl
											label="Description"
											value={tab.description}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'description', value)}
										/>
									</div>
									<div className="block">
										<div className="row">
											<TextControl
												label="Button (optional)"
												value={tab.button}
												className="input"
												onChange={(value) => setItemAttribute2(tab, 'button', value)}
											/>
										</div>
										<div className="row">
											<TextControl
												label="Button Link"
												value={tab.target}
												className="input"
												onChange={(value) => setItemAttribute2(tab, 'target', value)}
											/>
										</div>
									</div>
									<div className="row">
										<TextControl
											label="Title Width"
											value={tab.widths.title}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'widths', { ...tab.widths, title: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mTitle}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'widths', { ...tab.widths, mTitle: value })}
										/>
									</div>
									<div className="row">
										<TextControl
											label="Description Width"
											value={tab.widths.text}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'widths', { ...tab.widths, text: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mText}
											className="input"
											onChange={(value) => setItemAttribute2(tab, 'widths', { ...tab.widths, mText: value })}
										/>
									</div>
									<div className="row">
										<BaseControl label="Image">
											<MediaUpload
												onSelect={(value) => setItemAttribute2(tab, 'image', value)}
												type="image"
												render={({ open }) => (
													<Button className="button" onClick={open}>
														{tab.image.url == 'card.svg' ? (
															<img src={SVG1} alt={'icon'} />
														) : tab.image.url == 'pdf.svg' ? (
															<img src={SVG2} alt={'icon'} />
														) : tab.image.url == 'page.svg' ? (
															<img src={SVG3} alt={'icon'} />
														) : tab.image.url == '21.svg' ? (
															<img src={SVG4} alt={'icon'} />
														) : tab.image.url == 'bag.svg' ? (
															<img src={SVG5} alt={'icon'} />
														) : tab.image.url == 'tablet.svg' ? (
															<img src={SVG6} alt={'icon'} />
														) : tab.image.url == 'image.svg' ? (
															<img src={SVG7} alt={'icon'} />
														) : tab.image.url ? (
															<img src={tab.image.url} alt={tab.image.alt} />
														) : (
															'Insert'
														)}
													</Button>
												)}
											/>
											<Button
												icon="dismiss"
												showTooltip="true"
												label="Delete image"
												className="delete-button"
												onClick={() => setItemAttribute2(tab, 'image', { url: '', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n1"
												onClick={() => setItemAttribute2(tab, 'image', { url: 'card.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n2"
												onClick={() => setItemAttribute2(tab, 'image', { url: 'pdf.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n3"
												onClick={() => setItemAttribute2(tab, 'image', { url: 'page.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n4"
												onClick={() => setItemAttribute2(tab, 'image', { url: '21.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n5"
												onClick={() => setItemAttribute2(tab, 'image', { url: 'bag.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n6"
												onClick={() => setItemAttribute2(tab, 'image', { url: 'image.svg', alt: '' })}
											/>
										</BaseControl>
									</div>
									<Button variant="primary" className="primary-button" onClick={() => removeItem2(tab)}>
										Delete
									</Button>
								</Placeholder>
							)}
						</TabPanel>
						<Button variant="primary" className="primary-button" onClick={() => addItem2(Math.random())}>
							Add new
						</Button>
						<div className="row">
							<TextControl
								label="Hidden Block button"
								value={extra2.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra2 }
									newValue.button = value
									setAttributes({ extra2: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextareaControl
								label="Hidden Block content"
								value={extra2.content}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra2 }
									newValue.content = value
									setAttributes({ extra2: newValue })
								}}
							/>
						</div>
						<div className="row">
							<CheckboxControl
								label="Initial No Opened"
								checked={initialNoOpened2}
								onChange={(value) => setAttributes({ initialNoOpened2: value })}
								className="checkbox"
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Third tab title"
								value={title3}
								className="input"
								onChange={(value) => {
									setAttributes({ title3: value })
								}}
							/>
						</div>
						<TabPanel tabs={items3}>
							{(tab) => (
								<Placeholder className={'placeholder'}>
									<div className="row">
										<TextControl
											label="Title"
											value={tab.title}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'title', value)}
										/>
									</div>
									<div className="row">
										<TextareaControl
											label="Description"
											value={tab.description}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'description', value)}
										/>
									</div>
									<div className="block">
										<div className="row">
											<TextControl
												label="Button (optional)"
												value={tab.button}
												className="input"
												onChange={(value) => setItemAttribute3(tab, 'button', value)}
											/>
										</div>
										<div className="row">
											<TextControl
												label="Button Link"
												value={tab.target}
												className="input"
												onChange={(value) => setItemAttribute3(tab, 'target', value)}
											/>
										</div>
									</div>
									<div className="row">
										<TextControl
											label="Title Width"
											value={tab.widths.title}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'widths', { ...tab.widths, title: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mTitle}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'widths', { ...tab.widths, mTitle: value })}
										/>
									</div>
									<div className="row">
										<TextControl
											label="Description Width"
											value={tab.widths.text}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'widths', { ...tab.widths, text: value })}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.widths.mText}
											className="input"
											onChange={(value) => setItemAttribute3(tab, 'widths', { ...tab.widths, mText: value })}
										/>
									</div>
									<div className="row">
										<BaseControl label="Image">
											<MediaUpload
												onSelect={(value) => setItemAttribute3(tab, 'image', value)}
												type="image"
												render={({ open }) => (
													<Button className="button" onClick={open}>
														{tab.image.url == 'card.svg' ? (
															<img src={SVG1} alt={'icon'} />
														) : tab.image.url == 'pdf.svg' ? (
															<img src={SVG2} alt={'icon'} />
														) : tab.image.url == 'page.svg' ? (
															<img src={SVG3} alt={'icon'} />
														) : tab.image.url == '21.svg' ? (
															<img src={SVG4} alt={'icon'} />
														) : tab.image.url == 'bag.svg' ? (
															<img src={SVG5} alt={'icon'} />
														) : tab.image.url == 'tablet.svg' ? (
															<img src={SVG6} alt={'icon'} />
														) : tab.image.url == 'image.svg' ? (
															<img src={SVG7} alt={'icon'} />
														) : tab.image.url ? (
															<img src={tab.image.url} alt={tab.image.alt} />
														) : (
															'Insert'
														)}
													</Button>
												)}
											/>
											<Button
												icon="dismiss"
												showTooltip="true"
												label="Delete image"
												className="delete-button"
												onClick={() => setItemAttribute3(tab, 'image', { url: '', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n1"
												onClick={() => setItemAttribute3(tab, 'image', { url: 'card.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n2"
												onClick={() => setItemAttribute3(tab, 'image', { url: 'pdf.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n3"
												onClick={() => setItemAttribute3(tab, 'image', { url: 'page.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n4"
												onClick={() => setItemAttribute3(tab, 'image', { url: '21.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n5"
												onClick={() => setItemAttribute3(tab, 'image', { url: 'bag.svg', alt: '' })}
											/>
											<Button
												icon="cover-image"
												showTooltip="true"
												label="Set default image"
												className="default-image-button n6"
												onClick={() => setItemAttribute3(tab, 'image', { url: 'image.svg', alt: '' })}
											/>
										</BaseControl>
									</div>
									<Button variant="primary" className="primary-button" onClick={() => removeItem3(tab)}>
										Delete
									</Button>
								</Placeholder>
							)}
						</TabPanel>
						<Button variant="primary" className="primary-button" onClick={() => addItem3(Math.random())}>
							Add new
						</Button>
						<div className="row">
							<TextControl
								label="Hidden Block button"
								value={extra3.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra3 }
									newValue.button = value
									setAttributes({ extra3: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextareaControl
								label="Hidden Block content"
								value={extra3.content}
								className="input"
								onChange={(value) => {
									const newValue = { ...extra3 }
									newValue.content = value
									setAttributes({ extra3: newValue })
								}}
							/>
						</div>
						<div className="row">
							<CheckboxControl
								label="Initial No Opened"
								checked={initialNoOpened3}
								onChange={(value) => setAttributes({ initialNoOpened3: value })}
								className="checkbox"
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Outlined Button"
								value={outlinedButton}
								className="input"
								onChange={(value) => setAttributes({ outlinedButton: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Outlined Button Link"
								value={outlinedButtonTarget}
								className="input"
								onChange={(value) => setAttributes({ outlinedButtonTarget: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Primary Button"
								value={primaryButton}
								className="input"
								onChange={(value) => setAttributes({ primaryButton: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Primary Button Link"
								value={primaryButtonTarget}
								className="input"
								onChange={(value) => setAttributes({ primaryButtonTarget: value })}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Extra text"
								value={extraText}
								className="input"
								onChange={(value) => setAttributes({ extraText: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Extra link"
								value={extraLink}
								className="input"
								onChange={(value) => setAttributes({ extraLink: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Extra link target"
								value={extraLinkTarget}
								className="input"
								onChange={(value) => setAttributes({ extraLinkTarget: value })}
							/>
						</div>
					</div>
					<div className="row">
						<CheckboxControl
							label="Increase spacing"
							checked={bigSpacing}
							onChange={(value) => setAttributes({ bigSpacing: value })}
							className="checkbox"
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
